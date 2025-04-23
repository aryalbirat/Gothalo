## Gothalo - Revolutionizing the Rental Experience

Gothalo is a web application designed to revolutionize the rental experience by connecting landlords and tenants efficiently. The platform provides a seamless interface for property listing, searching, and management.

## Features

- **User Authentication**: Secure login and signup functionality
- **Landlord Portal**: Property registration and management
- **Tenant Portal**: Browse available properties with detailed information
- **Responsive Design**: Works on mobile and desktop devices
- **Contact System**: Direct communication between users and administrators

## Tech Stack

- PHP
- MySQL
- Bootstrap 5
- HTML/CSS
- JavaScript

## Project Structure

```
gothalo/
├── about.php          # About page with project information
├── connect.php        # Database connection configuration
├── contact.php        # Contact form for user inquiries
├── index.php          # Landing page with main navigation
├── landlord.php       # Property registration for landlords
├── login.php          # User authentication
├── logout.php         # Session termination
├── nav.php            # Navigation bar included in all pages
├── part.css           # Main stylesheet
├── README.md          # Project documentation
├── signup.php         # New user registration
├── tenant.php         # Property listings for tenants
└── image/             # Image assets directory
    ├── about_bc.jpg
    ├── bg1.jpg
    ├── bg2.jpg
    ├── bg3.jpg
    └── GOTHALO NOBG.png
```

## Installation

1. Clone the repository to your local server directory
2. Import the SQL database structure (not included in this repo)
3. Configure database connection in connect.php
4. Access the application through your web server

## Database Structure

The application uses two main databases:
- `project`: Contains user authentication and property information
- `contact_us`: Stores contact form submissions

## Usage

### For Landlords
1. Create an account or login
2. Navigate to "Landlords" section
3. Fill in property details in the registration form

### For Tenants
1. Create an account or login
2. Browse available properties in the "Tenants" section
3. Contact property owners through the platform

## Security Features

- Password hashing using PHP's built-in functions
- Session management for authenticated users
- Form validation to prevent common attacks

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-source and available under the MIT License.

## Future Enhancements

- Property image upload functionality
- Advanced search filtering
- Online payment integration
- User review and rating system