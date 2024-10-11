module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    // Compile SCSS files to CSS in the css-compiled directory
                    'css-compiled/spectre.css': 'scss/spectre.scss',
                    'css-compiled/spectre-exp.css': 'scss/spectre-exp.scss',
                    'css-compiled/spectre-icons.css': 'scss/spectre-icons.scss',
                    'css-compiled/theme.css': 'scss/theme.scss',
                }
            },
        },
        cssmin: {
            frontend: {
                files: [
                    {
                        src: 'css-compiled/spectre.css',
                        dest: 'css-compiled/spectre.min.css'
                    },
                    {
                        src: 'css-compiled/spectre-exp.css',
                        dest: 'css-compiled/spectre-exp.min.css'
                    },
                    {
                        src: 'css-compiled/spectre-icons.css',
                        dest: 'css-compiled/spectre-icons.min.css'
                    },
                    {
                        src: 'css-compiled/theme.css',
                        dest: 'css-compiled/theme.min.css'
                    },
                ]
            },
        },
        terser: {
            options: {
                format: {
                    beautify: false,
                },
                mangle: {
                    properties: false,
                },
                compress: {
                    drop_console: false,
                }
            },
            dist: {
                options: {
                    format: {
                        beautify: false,
                    },
                    mangle: true,
                    compress: {
                        drop_console: true,
                    }
                },
                files: {
                    'js/main.min.js': ['js/*.js'],
                },
            }
        },
        cwebp: {
            frontend: {
                options: {
                    q: 70
                },
                files: [{
                    expand: true,
                    cwd: 'src/images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'src/images/'
                }]
            }
        },
        watch: {
            frontend: {
                files: [
                    'scss/**/*.scss',
                    'js/**/*.js',
                ],
                tasks: ['sass', 'terser:dist', 'cssmin:frontend']
            },
        },
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-terser');
    grunt.loadNpmTasks('grunt-cwebp');

    // Default task(s).
    grunt.registerTask('default', ['watch:frontend']);

    // Release all.
    grunt.registerTask('dist', ['sass', 'terser:dist', 'cssmin:frontend', 'cwebp']);
};
