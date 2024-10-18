document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let msg = document.getElementById('message').value;
  
    if (name && email && msg) {
      alert('Message sent successfully!');
    } else {
      alert('Please fill in all fields.');
    }
  });
  