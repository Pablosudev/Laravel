const swiperFood = new Swiper('.swiper-food', {
    slidesPerView: 'auto',
    spaceBetween: 30,
    centeredSlides: true,
    direction: 'horizontal',
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


  const swiperRestaurant = new Swiper('.swiper-restaurant', {
    
    direction: 'horizontal',
    
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  const swiperFacilities = new Swiper('.swiper-facilities', {
    
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  const swiperFoodDesktop = new Swiper('.swiper-menuDesktop', {
    loop: true,
    direction: 'horizontal',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    
  });
