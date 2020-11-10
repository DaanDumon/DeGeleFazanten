const tl2 = gsap.timeline ({ defaults: {ease: 'power1.out'} });

tl2.fromTo('nav', {opacity: 0}, {opacity: 1, duration: 1}); 
tl2.fromTo('.Logo-text', {opacity: 0}, {opacity: 1, duration: 1}, "-=1"); 