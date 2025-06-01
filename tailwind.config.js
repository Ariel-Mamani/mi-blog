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
                russian_violet: '#10002b',
                russian_violet_alt: '#240046', 
                persian_indigo: '#3c096c',
                tekhelet: '#5a189a',
                french_violet: '#7b2cbf',
                amethyst: '#9d4edd',
                heliotrope: '#c77dff',
                mauve: '#e0aaff'
            }
        },
    },

    plugins: [forms],
};
