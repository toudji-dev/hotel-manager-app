

module.exports = ({ env }) => ({
    plugin: [require('tailwindcss')(),
    require('autoprefixer')()

    ]
})
