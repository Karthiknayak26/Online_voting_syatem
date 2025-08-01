# 🗳️ Online Voting System

A secure, modern, and user-friendly online voting platform designed for educational institutions like SMVITM. This system enables digital voting with OTP verification, real-time results, and comprehensive admin management.

![Voting System](https://img.shields.io/badge/Status-Active-brightgreen)
![PHP](https://img.shields.io/badge/PHP-7.4+-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange)
![License](https://img.shields.io/badge/License-MIT-green)

## 📋 Table of Contents

- [Features](#-features)
- [Screenshots](#-screenshots)
- [Technology Stack](#-technology-stack)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [Database Schema](#-database-schema)
- [Security Features](#-security-features)
- [API Endpoints](#-api-endpoints)
- [Contributing](#-contributing)
- [License](#-license)

## ✨ Features

### 🎯 Core Features
- **Secure Voter Authentication** - OTP-based phone verification
- **Multi-Role Access** - Separate portals for voters and administrators
- **Real-time Voting** - Live ballot casting with instant validation
- **Result Visualization** - Interactive charts and statistics
- **Candidate Management** - Add, edit, and manage candidates with symbols
- **Position Management** - Create and manage different voting positions
- **Voter Registration** - Streamlined registration process
- **Admin Dashboard** - Comprehensive administrative controls

### 🔐 Security Features
- **OTP Verification** - Two-factor authentication via SMS
- **Session Management** - Secure session handling
- **Input Validation** - Comprehensive data validation
- **SQL Injection Protection** - Prepared statements
- **XSS Prevention** - Output sanitization

### 📊 Admin Features
- **Voter Management** - Add, edit, delete voter records
- **Candidate Management** - Manage candidates and their symbols
- **Position Management** - Create and manage voting positions
- **Result Management** - View and manage voting results
- **Voting Schedule** - Set up voting periods
- **System Reset** - Reset voting data when needed

### 👥 Voter Features
- **Easy Registration** - Simple registration process
- **Phone Number Change** - Request phone number updates
- **Secure Voting** - One-time voting with verification
- **Result Viewing** - View election results
- **Profile Management** - Update personal information

## 🖼️ Screenshots

### Landing Page
![Landing Page](screenshots/landing-page.png)

### Voter Login
![Voter Login](screenshots/voter-login.png)

### Admin Dashboard
![Admin Dashboard](screenshots/admin-dashboard.png)

### Voting Interface
![Voting Interface](screenshots/voting-interface.png)

## 🛠️ Technology Stack

### Backend
- **PHP 7.4+** - Server-side scripting
- **MySQL 5.7+** - Database management
- **Apache/Nginx** - Web server

### Frontend
- **HTML5** - Markup structure
- **CSS3** - Styling and responsive design
- **JavaScript** - Interactive functionality
- **Chart.js** - Data visualization

### Database
- **MySQL** - Primary database
- **phpMyAdmin** - Database administration

## 📦 Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Composer (optional)

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/online-voting-system.git
cd online-voting-system
```

### Step 2: Database Setup
1. Create a MySQL database named `voting`
2. Import the database schema:
```bash
mysql -u your_username -p voting < database/voting.sql
```

### Step 3: Configure Database Connection
Update the database configuration in your PHP files:
```php
$host = 'localhost';
$username = 'your_db_username';
$password = 'your_db_password';
$database = 'voting';
```

### Step 4: Web Server Configuration
1. Point your web server to the project directory
2. Ensure PHP has write permissions for session files
3. Configure your web server to handle PHP files

### Step 5: SMS Gateway Configuration (Optional)
For OTP functionality, configure your SMS gateway:
```php
// Update SMS configuration in relevant files
$sms_api_key = 'your_sms_api_key';
$sms_sender_id = 'VOTING';
```

## ⚙️ Configuration

### Environment Variables
Create a `.env` file in the root directory:
```env
DB_HOST=localhost
DB_USERNAME=your_username
DB_PASSWORD=your_password
DB_NAME=voting
SMS_API_KEY=your_sms_api_key
SMS_SENDER_ID=VOTING
```

### File Permissions
```bash
chmod 755 -R Online_Voting_System/
chmod 777 -R Online_Voting_System/voting/symbol/
```

## 🚀 Usage

### For Voters
1. **Registration**: Visit `/voting/registration.php`
2. **Login**: Visit `/voting/` and enter your phone number
3. **OTP Verification**: Enter the OTP sent to your phone
4. **Voting**: Select candidates and cast your vote
5. **Results**: View real-time election results

### For Administrators
1. **Login**: Visit `/voting/admin/` with admin credentials
2. **Dashboard**: Access comprehensive admin controls
3. **Manage Voters**: Add, edit, or delete voter records
4. **Manage Candidates**: Add candidates with symbols
5. **Monitor Results**: View voting statistics and results

### Default Admin Credentials
- **Email**: ssvps@gmail.com
- **Password**: pass@123

## 🗄️ Database Schema

### Core Tables
- `admin` - Administrator accounts
- `voter` - Voter registration data
- `candidate` - Candidate information and symbols
- `can_position` - Available voting positions
- `voting` - Voting records and results
- `register` - Voter registration details

### Key Relationships
- Voters are linked to candidates through voting records
- Candidates are associated with positions
- Admin manages all system operations

## 🔒 Security Features

### Authentication & Authorization
- **Session-based authentication**
- **Role-based access control**
- **OTP verification for voters**
- **Admin login with email/password**

### Data Protection
- **Input sanitization**
- **SQL injection prevention**
- **XSS protection**
- **CSRF token validation**

### Voting Security
- **One-time voting per voter**
- **Vote verification**
- **Audit trail maintenance**
- **Result integrity checks**

## 📡 API Endpoints

### Voter Endpoints
- `POST /voting/otpform.php` - OTP verification
- `POST /voting/registration.php` - Voter registration
- `POST /voting/voting-system.php` - Cast vote
- `GET /voting/result.php` - View results

### Admin Endpoints
- `POST /voting/admin/admin_welcome.php` - Admin login
- `GET /voting/admin/voters.php` - Manage voters
- `GET /voting/admin/candidates.php` - Manage candidates
- `GET /voting/admin/result.php` - View results

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**: `git checkout -b feature/amazing-feature`
3. **Commit your changes**: `git commit -m 'Add amazing feature'`
4. **Push to the branch**: `git push origin feature/amazing-feature`
5. **Open a Pull Request**

### Development Guidelines
- Follow PHP PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation as needed

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

### Contact Information
- **Email**: info@smvitmvoting.com
- **Phone**: +91 98765 43210
- **Technical Support**: support@smvitmvoting.com

### Documentation
- [User Guide](docs/user-guide.md)
- [Admin Manual](docs/admin-manual.md)
- [API Documentation](docs/api-docs.md)

## 🙏 Acknowledgments

- **SMVITM** - For providing the platform requirements
- **PHP Community** - For excellent documentation and support
- **MySQL Team** - For robust database management
- **Chart.js** - For beautiful data visualization

---

**Made with ❤️ for secure and transparent voting**

*Last updated: December 2024* #   O n l i n e _ v o t i n g _ s y a t e m  
 