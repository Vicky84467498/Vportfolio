tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                error: '#ffb4ab',
                'inverse-on-surface': '#313030',
                'error-container': '#93000a',
                'on-secondary-fixed-variant': '#6900b3',
                'charcoal-black': '#0A0A0A',
                'surface-container-high': '#2a2a2a',
                'on-background': '#e5e2e1',
                'inverse-primary': '#005bc1',
                'surface-variant': '#353534',
                'on-surface-variant': '#c1c6d7',
                'glass-fill': 'rgba(255, 255, 255, 0.03)',
                'on-secondary': '#4a0080',
                'surface-container-highest': '#353534',
                'surface-container-low': '#1c1b1b',
                'on-surface': '#e5e2e1',
                'deep-purple': '#4A00E0',
                'tertiary-fixed-dim': '#ffb59a',
                'on-tertiary': '#5a1b00',
                'on-primary': '#002e69',
                'secondary-container': '#7900cd',
                'secondary-fixed-dim': '#ddb7ff',
                'on-error-container': '#ffdad6',
                'surface-bright': '#393939',
                outline: '#8b90a0',
                tertiary: '#ffb59a',
                secondary: '#ddb7ff',
                'on-secondary-container': '#ddb7ff',
                'inverse-surface': '#e5e2e1',
                'on-primary-fixed': '#001a41',
                'tertiary-fixed': '#ffdbce',
                'glass-border': 'rgba(255, 255, 255, 0.1)',
                'primary': '#adc6ff',
                'primary-container': '#4b8eff',
                'glass-border': 'rgba(255, 255, 255, 0.1)',
                'on-primary-container': '#00285c',
                'tertiary-container': '#fc5b00',
                'on-tertiary-fixed-variant': '#802a00',
                background: '#131313',
                'on-tertiary-fixed': '#370e00',
                'on-secondary-fixed': '#2c0050',
                'primary-fixed': '#d8e2ff',
                'surface-tint': '#adc6ff',
                'surface': '#131313',
                'on-error': '#690005',
                'electric-blue': '#00D4FF',
                'outline-variant': '#414755'
            },
            borderRadius: {
                DEFAULT: '0.25rem',
                lg: '0.5rem',
                xl: '0.75rem',
                full: '9999px'
            },
            spacing: {
                gutter: '24px',
                'margin-desktop': '64px',
                'container-max': '1280px',
                'margin-mobile': '16px',
                'section-gap': '120px'
            },
            fontFamily: {
                'display-lg-mobile': ['Hanken Grotesk'],
                'body-md': ['Inter'],
                'headline-md': ['Hanken Grotesk'],
                'body-lg': ['Inter'],
                'display-lg': ['Hanken Grotesk'],
                'label-mono': ['JetBrains Mono']
            },
            fontSize: {
                'display-lg-mobile': ['48px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '800' }],
                'body-md': ['16px', { lineHeight: '1.5', fontWeight: '400' }],
                'headline-md': ['32px', { lineHeight: '1.2', fontWeight: '600' }],
                'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }],
                'display-lg': ['72px', { lineHeight: '1.1', letterSpacing: '-0.04em', fontWeight: '800' }],
                'label-mono': ['14px', { lineHeight: '1.2', letterSpacing: '0.05em', fontWeight: '500' }]
            }
        }
    }
};
