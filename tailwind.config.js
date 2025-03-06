/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,js}"],
  theme: {
    extend: 
    {
      colors: {
        primary: '#1B1E31',  // Custom primary color
        secondary: '#C5D8F3',  // Custom secondary color
        themeColor1:'#004AAD',
        themeColor2: '#C85103',
        themecolor3:'#555555',
      },
      backgroundImage: {
        'custom-gradient': 'linear-gradient(90deg, rgba(0,74,173,0.7) 0%, rgba(15,6,0,1) 100%)',
        
      },
      
      fontFamily: {
        serif: ['"Mulish", serif;'], // First font family
        heading: ['"Syne", serif;'], // Second font family
        jost: ['Jost', 'serif'],
        poppins: ['Poppins', 'sans-serif'],
        barlow: ['Barlow', 'sans-serif'],
      },
      
      container: {
        width: '100%',
        marginRight: 'auto',
        marginLeft: 'auto',
        paddingRight: '2rem',
        paddingLeft: '2rem',
      },

      translate: {
        '-1/4': '-25%', // Adds -25% as a custom valuenpn
        '10px': '10px', // Adds 10px as a custom value
      },

      keyframes:{
        flipHorizontal: {
          '50%' : { transform: 'rotateY(180deg)'},
        },
      },

      animation:{
          hflip : 'flipHorizontal 2s infinite',
      }
    },
  },
  plugins: [],
}

