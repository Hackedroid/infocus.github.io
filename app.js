const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000; // Change this to your desired port

// Middleware to parse JSON
app.use(bodyParser.json());

// Serve static files (like your HTML and CSS)
app.use(express.static('public'));

// Handle the registration form submission
app.post('/register', (req, res) => {
    const { username, fullname, email, password, confirmpassword } = req.body;

    // Implement your logic to save user data to the database here

    // Respond to the client (you can send a success or error response)
    res.send('Registration successful');
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});