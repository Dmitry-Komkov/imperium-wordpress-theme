import { babel } from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import nodeResolve from '@rollup/plugin-node-resolve';
import autoprefixer from 'autoprefixer';
import postcss from 'postcss';
import clear from 'rollup-plugin-clear';
import scss from 'rollup-plugin-scss';

export default [
  {
    input: './src/js/app.js',
    watch: {
      exclude: ['node_modules/**']
    },
    output: {
      file: __dirname + '/dist/js/bundle.js',
      format: 'cjs'
    },
    plugins: [
      clear({
        watch: true
      }),
      nodeResolve(),
      commonjs(),
      babel({ presets: ['@babel/preset-env'] }),
      scss({
        include: ['./src/scss/app.scss'],
        watch: ["./src/scss/"],
        output: __dirname + '/dist/css/main.css',
        sass: require('node-sass'),
        sourceMap: true,
        failOnError: true,
        processor: () => postcss([autoprefixer({
          flexbox: true,
          grid: 'autoplace',
        })]),
      })
    ]
  },
  {
    input: './src/js/groups.js',
    watch: {
      exclude: ['node_modules/**']
    },
    output: {
      file: __dirname + '/dist/js/groups.js',
      format: 'cjs'
    },
    plugins: [
      clear({
        watch: true
      }),
      nodeResolve(),
      commonjs(),
      babel({ presets: ['@babel/preset-env'] }),
      scss({
        include: ['./src/scss/groups.scss'],
        watch: ["./src/scss/"],
        output: __dirname + '/dist/css/groups.css',
        sass: require('node-sass'),
        sourceMap: true,
        failOnError: true,
        processor: () => postcss([autoprefixer({
          flexbox: true,
          grid: 'autoplace',
        })]),
      })
    ]
  },
  {
    input: './src/js/cup.js',
    watch: {
      exclude: ['node_modules/**']
    },
    output: {
      file: __dirname + '/dist/js/cup.js',
      format: 'cjs'
    },
    plugins: [
      clear({
        watch: true
      }),
      nodeResolve(),
      commonjs(),
      babel({ presets: ['@babel/preset-env'] }),
      scss({
        include: ['./src/scss/cup.scss'],
        watch: ["./src/scss/"],
        output: __dirname + '/dist/css/cup.css',
        sass: require('node-sass'),
        sourceMap: true,
        failOnError: true,
        processor: () => postcss([autoprefixer({
          flexbox: true,
          grid: 'autoplace',
        })]),
      })
    ]
  }
]