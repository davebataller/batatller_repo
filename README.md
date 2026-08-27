# Laravel Portfolio - Baruela Ronhelyn G

A personal portfolio website built with Laravel showcasing my educational background, projects, and GitHub repositories. This static portfolio demonstrates web development skills using Laravel Blade templating without database dependencies.

## Features

- **Responsive Design**: Mobile-friendly layout that adapts to different screen sizes
- **Clean Navigation**: Easy navigation between portfolio sections
- **Personal Information**: Contact details and professional bio
- **Educational Timeline**: Complete educational background from elementary to college
- **Project Showcase**: Grid layout displaying portfolio projects
- **GitHub Integration**: Direct links to GitHub repositories

## Tech Stack

- **Framework**: Laravel 13.8
- **Templating**: Blade (.blade.php)
- **Styling**: Custom CSS with Tailwind CSS for responsive design
- **Build Tool**: Vite
- **No Database**: Static content without database migrations or models

## Project Structure

```
auth-demo/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Main layout template
│   │   └── portfolio.blade.php         # Portfolio content
│   ├── css/
│   │   └── app.css                     # Custom styling
│   └── js/
│       ├── app.js                       # JavaScript entry point
│       └── bootstrap.js                 # Bootstrap configuration
├── public/
│   └── image/
│       └── me.jpg                       # Profile picture
├── routes/
│   └── web.php                          # Web routes
└── PROMPT_LOG.md                        # AI prompt documentation
```

## Installation

1. **Clone the repository**
   ```bash
   git clone <your-repository-url>
   cd auth-demo
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Build assets**
   ```bash
   npm run dev
   ```

5. **Run the development server**
   ```bash
   php artisan serve
   ```

6. **Access the portfolio**
   Open your browser and navigate to `http://localhost:8000`

## Usage

The portfolio is a static Laravel application. To customize:

1. **Update personal information**: Edit `resources/views/portfolio.blade.php`
2. **Add profile picture**: Replace `public/image/me.jpg` with your image
3. **Modify projects**: Update the projects section in the portfolio view
4. **Change GitHub links**: Update the GitHub repository URLs
5. **Customize styling**: Modify `resources/css/app.css`

## Portfolio Sections

### About Section
- Personal information and bio
- Contact details (phone and email)
- Professional profile picture

### Education Section
- Complete educational timeline
- School names and locations
- Years attended
- Degrees and certifications

### Projects Section
- Grid layout for project showcase
- Project descriptions
- Visual project cards with icons

### GitHub Section
- Direct links to GitHub profile
- Project repository links
- Social media-style buttons

## Development

This project was developed as part of the BSIT 4 Midterm Activity. All AI prompts used during development are documented in `PROMPT_LOG.md` following the assignment requirements.

## Author

**Baruela Ronhelyn G**
- Email: baruelaronhelyn07@gmail.com
- Phone: 09555383367
- Course: Bachelor of Science in Information Technology
- Institution: Data Center College of the Philippines

## License

This project is open source and available for educational purposes.

## Submission Requirements

This portfolio was created to fulfill the following requirements:
- Laravel framework with Blade templating
- No database usage (no migrations or models)
- Responsive design with mobile-friendly layout
- All required portfolio sections implemented
- Git version control with descriptive commit messages
- Complete AI prompt documentation in PROMPT_LOG.md
- Public GitHub repository

---

*Built with Laravel 13.8 - A personal portfolio project*