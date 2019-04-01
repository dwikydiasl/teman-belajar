// Select all text areas
var textArea = document.querySelectorAll('[data-js=bio]'),    
    maxText = 100;

// For each one...
[].forEach.call( textArea, function( el ) {
    
  var textAreaLength = el.innerHTML.length,
    teaserText = el.innerHTML.substr(0, 100),
    fullText = el.innerHTML,
    showTeaser = false;    

  // Check to see if this text length is more
  // than the max
  if (textAreaLength >= maxText) {
    // Set flag
    showTeaser = true;
    
    // Set teaser text  
    el.innerHTML = teaserText;
    el.innerHTML += el.innerHTML + '...';
  
    // Create button
    var button = document.createElement('button');
    button.innerHTML = 'Selengkapnya';
    button.classList.add('button');
    el.appendChild(button);
    
    // Button click event
    button.onclick = function () {
      if (showTeaser === true) {
        // Update flag
        showTeaser = false;
        
        // Update button text
        this.innerHTML = 'Sembunyikan';
        
        // Show full text
        el.innerHTML = fullText;
        
        // Re-append the button
        el.appendChild(this);
      } else {
        // Update flag
        showTeaser = true;
        
        // Update button text
        this.innerHTML = 'Selengkapnya';
        
        // Show teaser text
        el.innerHTML = teaserText;
        el.innerHTML += el.innerHTML + '...';
        
        // Re-append the button
        el.appendChild(this);
      }
      return false;
    };
  } else { 
    // Show full text
    el.innerHTML = fullText;
  }   
  
});
 
 

