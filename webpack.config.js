const path = require("path");

const HtmlWebpackPlugin = require('html-webpack-plugin');

const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
	mode: 'development',
	entry: "./src/js/index.js",
	output: {
		filename: "[name].bundle.js",
		path: path.resolve(__dirname, "public")
	},
	devServer: {
		contentBase: path.join(__dirname, "public"),
		port: 9002
	},
	optimization: {
		minimizer: [new TerserPlugin()]
	},
	plugins: [new HtmlWebpackPlugin()],
	module: {
		rules: [
			{
				// Whenever a javascript file is found, babel should run and do not compile node_module files
				test: /\.js$/,
				exclude: /(node_modules)/,
				use: {
					loader: 'babel-loader',
					options: {
						// Supports all the browsers
						presets: ['@babel/preset-env']
					}
				}
			},
			{
				test: /\.s[ac]ss$/i,
				use: [
					// Creates `style` nodes from JS strings
					"style-loader",
					// Translates CSS into CommonJS
					"css-loader",
					// Compiles Sass to CSS
					"sass-loader",
				],
				type: "asset/resource",
				generator: {
					filename: 'style.css'
				},
				use: ["sass-loader"]
			},

			// Start here for the URL Loader
			{
				test: /\.(png|jpg)$/,
				use: [
					{ loader: 'url-loader' }
				]
			}
		]
	}
}