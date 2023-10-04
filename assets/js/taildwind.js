tailwind.config = {
    theme: {
        container: {
          center: true
        },
        screens: {
          '2xl': { max: '1535px' },
          // => @media (max-width: 1535px) { ... }
    
          xl: { max: '1279px' },
          // => @media (max-width: 1279px) { ... }
    
          lg: { max: '1023px' },
          // => @media (max-width: 1023px) { ... }
    
          md: { max: '767px' },
          // => @media (max-width: 767px) { ... }
    
          sm: { max: '639px' }
          // => @media (max-width: 639px) { ... }
        },
        extend: {
          colors: {
            primary: '#494949',
            secondary: '#4E4E4E',
            menu: '#0E43A6'
          },
          spacing: {}
        }
      },
  }