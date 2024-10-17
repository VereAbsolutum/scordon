/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            scale: {
                102: "1.02",
            },
            /*
            colors: {
                primary: {
                    50: "#fefce8", // Lighter shade for primary
                    100: "#fef09a", // Light shade
                    200: "#fcd34d", // Default primary color
                    300: "#fbbf24", // Slightly darker
                    400: "#f59e0b", // Darker shade
                    500: "#d97706", // Darkest primary color
                    600: "#b45309", // Darker accent
                    700: "#92400e", // Darker accent shade
                },
                secondary: {
                    50: "#e0f2fe", // Lighter shade for secondary
                    100: "#bae6fd", // Light shade
                    200: "#7dd3fc", // Default secondary color
                    300: "#38bdf8", // Slightly darker
                    400: "#0ea5e0", // Darker shade
                    500: "#0284c7", // Darkest secondary color
                    600: "#0369a1", // Darker accent
                    700: "#075985", // Darker accent shade
                },
                accent: {
                    50: "#fff7ed", // Lighter shade for accent
                    100: "#ffedd5", // Light shade
                    200: "#f97316", // Default accent color
                    300: "#ea580c", // Slightly darker
                    400: "#c2410c", // Darker shade
                    500: "#9a3412", // Darkest accent color
                    600: "#7c2d12", // Darker accent
                    700: "#5b1f0e", // Darker accent shade
                },
                neutral: {
                    50: "#f9fafb", // Lighter neutral
                    100: "#f3f4f6", // Light neutral
                    200: "#e5e7eb", // Default neutral
                    300: "#d1d5db", // Slightly darker
                    400: "#9ca3af", // Darker neutral
                    500: "#6b7280", // Darkest neutral
                    600: "#4b5563", // Darker neutral shade
                    700: "#374151", // Darker neutral
                    800: "#1f2937", // Darker neutral
                    900: "#111827", // Darkest neutral
                },
                base: {
                    50: "#ffffff", // Base white
                    100: "#f3f4f6", // Slightly off-white
                    200: "#e5e7eb", // Light base
                },
                error: {
                    50: "#fee2e2", // Light error shade
                    100: "#fecaca", // Lighter error shade
                    200: "#fca5a5", // Default error color
                    300: "#f87171", // Slightly darker
                    400: "#dc2626", // Darker error
                    500: "#991b1b", // Darkest error
                },
                success: {
                    50: "#dcfce7", // Light success shade
                    100: "#bbf7d0", // Lighter success shade
                    200: "#86efac", // Default success color
                    300: "#4ade80", // Slightly darker
                    400: "#16a34a", // Darker success
                    500: "#15803d", // Darkest success
                },
                warning: {
                    50: "#fef9c3", // Light warning shade
                    100: "#fef08a", // Lighter warning shade
                    200: "#f59e0b", // Default warning color
                    300: "#fbbf24", // Slightly darker
                    400: "#f97316", // Darker warning
                    500: "#b45309", // Darkest warning
                },
            },
            */
            fontFamily: {
                display: ["Oswald", "sans-serif"],
                title: ["Oswald", "sans-serif"],
                sans: ["Montserrat", "sans-serif"],
            },
            fontSize: {
                // Tamanhos de fonte para diferentes breakpoints
                display: ["3.5rem", { lineHeight: "1" }], // Tamanho padrão
                "display-sm": ["3rem", { lineHeight: "1" }], // Tamanho pequeno
                "display-md": ["3.25rem", { lineHeight: "1" }], // Tamanho médio
                "display-lg": ["3.5rem", { lineHeight: "1" }], // Tamanho grande

                heading1: ["2.5rem", { lineHeight: "1" }], // H1 padrão
                "heading1-sm": ["2rem", { lineHeight: "1" }], // H1 pequeno
                "heading1-md": ["2.25rem", { lineHeight: "1" }], // H1 médio
                "heading1-lg": ["2.5rem", { lineHeight: "1" }], // H1 grande

                heading2: ["2rem", { lineHeight: "1.2" }], // H2 padrão
                "heading2-sm": ["1.75rem", { lineHeight: "1.2" }], // H2 pequeno
                "heading2-md": ["1.875rem", { lineHeight: "1.2" }], // H2 médio
                "heading2-lg": ["2rem", { lineHeight: "1.2" }], // H2 grande

                heading3: ["1.75rem", { lineHeight: "1.2" }], // H3 padrão
                "heading3-sm": ["1.5rem", { lineHeight: "1.2" }], // H3 pequeno
                "heading3-md": ["1.625rem", { lineHeight: "1.2" }], // H3 médio
                "heading3-lg": ["1.75rem", { lineHeight: "1.2" }], // H3 grande

                heading4: ["1.5rem", { lineHeight: "1.2" }], // H4 padrão
                "heading4-sm": ["1.375rem", { lineHeight: "1.2" }], // H4 pequeno
                "heading4-md": ["1.5rem", { lineHeight: "1.2" }], // H4 médio
                "heading4-lg": ["1.5rem", { lineHeight: "1.2" }], // H4 grande

                heading5: ["1.25rem", { lineHeight: "1.2" }], // H5 padrão
                "heading5-sm": ["1.125rem", { lineHeight: "1.2" }], // H5 pequeno
                "heading5-md": ["1.25rem", { lineHeight: "1.2" }], // H5 médio
                "heading5-lg": ["1.25rem", { lineHeight: "1.2" }], // H5 grande

                subheader: ["1.125rem", { lineHeight: "1.2" }], // Subtítulo padrão
                "subheader-sm": ["1rem", { lineHeight: "1.2" }], // Subtítulo pequeno
                "subheader-md": ["1.125rem", { lineHeight: "1.2" }], // Subtítulo médio
                "subheader-lg": ["1.125rem", { lineHeight: "1.2" }], // Subtítulo grande

                paragraph1: ["1rem", { lineHeight: "1.5" }], // Parágrafo principal padrão
                "paragraph1-sm": ["0.9375rem", { lineHeight: "1.5" }], // Parágrafo principal pequeno
                "paragraph1-md": ["1rem", { lineHeight: "1.5" }], // Parágrafo principal médio
                "paragraph1-lg": ["1rem", { lineHeight: "1.5" }], // Parágrafo principal grande

                paragraph2: ["0.875rem", { lineHeight: "1.5" }], // Parágrafo secundário padrão
                "paragraph2-sm": ["0.8125rem", { lineHeight: "1.5" }], // Parágrafo secundário pequeno
                "paragraph2-md": ["0.875rem", { lineHeight: "1.5" }], // Parágrafo secundário médio
                "paragraph2-lg": ["0.875rem", { lineHeight: "1.5" }], // Parágrafo secundário grande

                paragraph3: ["0.75rem", { lineHeight: "1.5" }], // Parágrafo terciário padrão
                "paragraph3-sm": ["0.6875rem", { lineHeight: "1.5" }], // Parágrafo terciário pequeno
                "paragraph3-md": ["0.75rem", { lineHeight: "1.5" }], // Parágrafo terciário médio
                "paragraph3-lg": ["0.75rem", { lineHeight: "1.5" }], // Parágrafo terciário grande

                caption: ["0.625rem", { lineHeight: "1.5" }], // Legenda padrão
                "caption-sm": ["0.5625rem", { lineHeight: "1.5" }], // Legenda pequeno
                "caption-md": ["0.625rem", { lineHeight: "1.5" }], // Legenda médio
                "caption-lg": ["0.625rem", { lineHeight: "1.5" }], // Legenda grande

                footer: ["0.875rem", { lineHeight: "1.5" }], // Texto de rodapé padrão
                "footer-sm": ["0.8125rem", { lineHeight: "1.5" }], // Texto de rodapé pequeno
                "footer-md": ["0.875rem", { lineHeight: "1.5" }], // Texto de rodapé médio
                "footer-lg": ["0.875rem", { lineHeight: "1.5" }], // Texto de rodapé grande
            },
        },
    },
    plugins: [require("daisyui"), require("@tailwindcss/typography")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#fcb801",
                    secondary: "#1e40af",
                    accent: "#f97316",
                    neutral: "#374151",
                    "base-100": "#ffffff",
                    info: "#3b82f6",
                    success: "#16a34a",
                    warning: "#f59e0b",
                    error: "#dc2626",
                },
            },
        ],
    },
};
