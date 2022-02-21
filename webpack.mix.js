let mix = require('laravel-mix')

mix.js('resources/js/tool.js', 'dist/js')
    .vue({ version: 2 })
    .webpackConfig({
        externals: {
            Vue: 'vue',
        }
    });
