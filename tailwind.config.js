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
            colors: {
                "primary-50": "#fefce8",
                "primary-100": "#fef09a",
                "primary-200": "#fcd34d",
                "primary-300": "#fbbf24",
                "primary-400": "#f59e0b",
                "primary-500": "#d97706",
                "primary-600": "#b45309",
                "primary-700": "#92400e",

                "secondary-50": "#f5f3ff",
                "secondary-100": "#e0e7ff",
                "secondary-200": "#c7d2fe",
                "secondary-300": "#a5b4fc",
                "secondary-400": "#818cf8",
                "secondary-500": "#6366f1", // Roxo
                "secondary-600": "#4f46e5",
                "secondary-700": "#4338ca",

                "accent-50": "#fff7ed",
                "accent-100": "#ffedd5",
                "accent-200": "#f97316",
                "accent-300": "#ea580c",
                "accent-400": "#c2410c",
                "accent-500": "#9a3412",
                "accent-600": "#7c2d12",
                "accent-700": "#5b1f0e",

                "neutral-50": "#f9fafb",
                "neutral-100": "#f3f4f6",
                "neutral-200": "#e5e7eb",
                "neutral-300": "#d1d5db",
                "neutral-400": "#9ca3af",
                "neutral-500": "#6b7280",
                "neutral-600": "#4b5563",
                "neutral-700": "#374151",
                "neutral-800": "#1f2937",
                "neutral-900": "#111827",

                "base-50": "#ffffff",
                "base-100": "#f3f4f6",
                "base-200": "#e5e7eb",

                "error-50": "#fee2e2",
                "error-100": "#fecaca",
                "error-200": "#fca5a5",
                "error-300": "#f87171",
                "error-400": "#dc2626",
                "error-500": "#991b1b",

                "success-50": "#dcfce7",
                "success-100": "#bbf7d0",
                "success-200": "#86efac",
                "success-300": "#4ade80",
                "success-400": "#16a34a",
                "success-500": "#15803d",

                "warning-50": "#fef9c3",
                "warning-100": "#fef08a",
                "warning-200": "#f59e0b",
                "warning-300": "#fbbf24",
                "warning-400": "#f97316",
                "warning-500": "#b45309",
            },
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
                    secondary: "#6366f1", // Roxo
                    accent: "#ffec8b", // Dourado Claro
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
