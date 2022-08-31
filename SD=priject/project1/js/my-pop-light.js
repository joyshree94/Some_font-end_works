$('.parent-container').magnificPopup({
    items: [
      {
        src: 'image/work-1.jpg',
		type:'image'
      },
      {
        src: 'image/work-2.jpg',
        
      },
      {
        src: 'image/work-3.jpg', // Dynamically created element
      },
      {
        src: 'image/work-4.jpg',

      },
      {
        src: 'image/work-5.jpg', // CSS selector of an element on page that should be used as a popup
   
      }
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is default type
});