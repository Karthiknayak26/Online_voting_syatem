# 🗳️ Online Voting System

A comprehensive, secure, and user-friendly online voting system designed for educational institutions like SMVITM. This system enables students to participate in democratic elections through a modern web-based platform with robust security features.

## ✨ Features

### 🔐 Security & Authentication
- **Multi-factor Authentication**: OTP-based verification for voter login
- **Session Management**: Secure session handling with automatic logout
- **Password Protection**: Encrypted password storage and validation
- **Voter Verification**: ID proof upload and verification system
- **Anti-duplicate Voting**: Prevents multiple votes from the same voter

### 👥 User Management
- **Voter Registration**: Complete registration system with ID verification
- **Admin Panel**: Comprehensive administrative dashboard
- **User Profiles**: Personal voter profiles with photo and details
- **Account Management**: Password reset and profile updates

### 🗳️ Voting System
- **Multiple Positions**: Support for various election positions (Chairman, Secretary, etc.)
- **Candidate Management**: Add, edit, and manage candidates with symbols
- **Real-time Results**: Live vote counting and result display
- **Voting Schedule**: Configurable voting start and end dates
- **Ballot System**: Intuitive voting interface with candidate symbols

### 📊 Results & Analytics
- **Live Results**: Real-time vote counting and display
- **Result Charts**: Visual representation using Chart.js
- **Vote Statistics**: Detailed voting statistics and analytics
- **Export Capabilities**: Result export functionality

### 🎨 User Interface
- **Modern Design**: Responsive and intuitive user interface
- **Mobile Friendly**: Optimized for all device sizes
- **Accessibility**: User-friendly navigation and design
- **Visual Feedback**: Progress bars and status indicators

## 🛠️ Technology Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Charts**: Chart.js
- **Icons**: Font Awesome
- **Server**: Apache/Nginx

## 📋 Prerequisites

Before running this application, ensure you have:

- **Web Server**: Apache or Nginx
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher / MariaDB 10.4+
- **phpMyAdmin**: For database management (optional)
- **File Upload Support**: PHP file upload enabled

## 🚀 Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/online-voting-system.git
cd online-voting-system
```

### Step 2: Database Setup
1. Create a new MySQL database named `voting`
2. Import the database schema:
   ```bash
   mysql -u root -p voting < database/voting.sql
   ```
   Or use phpMyAdmin to import the `database/voting.sql` file

### Step 3: Configure Database Connection
Update the database connection settings in the following files:
- `voting/includes/all-select-data.php`
- `voting/admin/admin_welcome.php`
- `voting/voting-system.php`

Default configuration:
```php
$con = mysqli_connect('localhost', 'root', '', 'voting');
```

### Step 4: Web Server Configuration
1. Place the project in your web server's document root
2. Ensure proper file permissions (755 for directories, 644 for files)
3. Configure your web server to serve the application

### Step 5: Initial Setup
1. Access the application: `http://localhost/online-voting-system/`
2. Default admin credentials:
   - **Email**: ssvps@gmail.com
   - **Password**: pass@123

## 📁 Project Structure

```
Online_Voting_System/
├── database/
│   └── voting.sql              # Database schema
├── voting/
│   ├── admin/                  # Admin panel files
│   │   ├── admin-panel.php    # Main admin dashboard
│   │   ├── candidates.php      # Candidate management
│   │   ├── voters.php         # Voter management
│   │   ├── result.php         # Results display
│   │   └── symbol/            # Candidate symbols
│   ├── css/                   # Stylesheets
│   ├── js/                    # JavaScript files
│   ├── includes/              # Shared PHP includes
│   ├── img/                   # Images and assets
│   ├── registration.php       # Voter registration
│   ├── voting-system.php      # Main voting interface
│   └── index.php             # Voter login
├── index.html                 # Landing page
├── styles.css                 # Main stylesheet
└── logo.jpeg                 # Application logo
```

## 🎯 Usage Guide

### For Administrators

1. **Login to Admin Panel**
   - Navigate to `/voting/admin/`
   - Use admin credentials to login

2. **Manage Elections**
   - Set voting schedule and title
   - Add/remove election positions
   - Manage candidates and their symbols

3. **Voter Management**
   - View registered voters
   - Verify voter registrations
   - Manage voter accounts

4. **Monitor Results**
   - View real-time voting results
   - Export result data
   - Generate reports

### For Voters

1. **Registration**
   - Visit the registration page
   - Fill in personal details
   - Upload ID proof
   - Complete verification process

2. **Voting Process**
   - Login with registered credentials
   - Verify identity via OTP
   - Select candidates for each position
   - Submit vote securely

3. **View Results**
   - Check voting status
   - View election results
   - Track participation

## 🔧 Configuration

### Database Configuration
Edit database connection settings in PHP files:
```php
$con = mysqli_connect('hostname', 'username', 'password', 'database');
```

### Email Configuration (Optional)
Configure SMTP settings for email notifications:
```php
// Add SMTP configuration in relevant files
$smtp_host = 'smtp.gmail.com';
$smtp_port = 587;
$smtp_username = 'your-email@gmail.com';
$smtp_password = 'your-app-password';
```

### File Upload Settings
Ensure proper file upload configuration in `php.ini`:
```ini
upload_max_filesize = 10M
post_max_size = 10M
max_execution_time = 300
```

## 🛡️ Security Features

- **Input Validation**: All user inputs are validated and sanitized
- **SQL Injection Prevention**: Prepared statements and parameterized queries
- **XSS Protection**: Output encoding and validation
- **Session Security**: Secure session handling with timeout
- **File Upload Security**: Restricted file types and size limits
- **Access Control**: Role-based access control for admin functions

## 📱 Responsive Design

The application is fully responsive and works seamlessly on:
- Desktop computers
- Tablets
- Mobile phones
- Various screen sizes and orientations

## 🔄 Version History

- **v1.0.0**: Initial release with core voting functionality
- **v1.1.0**: Added admin panel and result management
- **v1.2.0**: Enhanced security and UI improvements
- **v1.3.0**: Mobile responsiveness and accessibility features

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:

- **Email**: support@smvitmvoting.com
- **Documentation**: Check the project wiki
- **Issues**: Report bugs via GitHub Issues
- **Discussions**: Use GitHub Discussions for questions

## 🙏 Acknowledgments

- **SMVITM**: For providing the platform and requirements
- **PHP Community**: For excellent documentation and resources
- **Chart.js**: For beautiful chart visualizations
- **Font Awesome**: For comprehensive icon library

## 📞 Contact

- **Project Maintainer**: [Your Name]
- **Email**: [your-email@domain.com]
- **Website**: [https://your-website.com]

---

**Note**: This system is designed for educational institutions and should be deployed in a secure environment with proper backup and monitoring systems in place. 