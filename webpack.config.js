const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
    filename: "[name]",
    disable: process.env.NODE_ENV === "development"
});

var path = require('path');
var webpack = require('webpack');

module.exports = {
    
        watch: true,
	context: path.join(__dirname, 'resources/assets'), 
        
	entry: {
            './js/admin/react_test.min.js' : './js/admin/react_test.jsx',
            
            './js/admin/auth.min.js' : './js/admin/auth.js',
            './css/admin/auth.min.css' : './sass/admin/auth.scss',
            
            './js/admin/datatables.min.js' : './js/admin/datatables.js',
            './css/admin/datatables.min.css' : './sass/admin/datatables.scss',
            
            './js/admin/main.min.js' : './js/admin/main.js',
            './css/admin/main.min.css' : './sass/admin/main.scss',
            
            './js/site/main.min.js' : './js/site/main.js',
            './css/site/main.min.css' : './sass/site/main.scss'
        },
        
	output: {
            path: path.join(__dirname, 'public'),
            filename: '[name]'
	},
        
        module: {
            rules: [
                {
                    test: /\.scss$/,
                    use: extractSass.extract({
                        use: [{
                                loader: "css-loader",
                                options: {
                                    minimize: true
                                }
                            }, {
                                loader: "sass-loader"
                            }],
                            fallback: "style-loader"
                    })
                },
                
                {
                    test: /.jsx?$/,
                    loader: 'babel-loader',
                    exclude: /node_modules/,
                    query: {
                        presets: ['es2015', 'react', 'stage-0', 'stage-1']
                    }
                },
                
                { 
                    test: /\.(png|jpg|gif)$/,
                    loader: 'url-loader'
                },
                
                {
                    test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/,
                    loader: 'url-loader'
                },
                
                {
                    test: /admin\/.+\.(js)$/,
                    loader: 'imports-loader?jQuery=jquery,$=jquery,this=>window'
                }
            ]
        },
        
        plugins: [
            
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                "window.jQuery": "jquery"
            }),
            
            new webpack.optimize.UglifyJsPlugin({
                compress: {warnings: false}
            }),
            
            extractSass,
            
            //Prevent errors because of React.JS
            new webpack.DefinePlugin({
                'process.env': {
                    'NODE_ENV': JSON.stringify('production')
                }
            })
        ]
};