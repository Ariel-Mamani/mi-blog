import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                charcoal: '#264653',
                persian_green: '#2a9d8f',
                saffron: '#e9c46a',
                sandy_brown: '#f4a261',
                burnt_sienna: '#e76f51',
            }
        },
    },

    plugins: [forms],
};
