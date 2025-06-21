<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Educational Assessment System</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; max-width: 900px; margin: auto;">

  <h1 style="text-align:center;">🎓 Educational Assessment System</h1>
  <p style="text-align:center;">
    A Laravel-based web application for managing academic assessments—featuring quizzes, student profiles, secure face-recognition login, exams, and student rankings.
  </p>

  <hr>

  <h2>🚀 Features</h2>
  <ul>
    <li><strong>👥 Student Profiles:</strong> Create and manage student accounts and details.</li>
    <li><strong>📝 Quiz & Exams Module:</strong> Create and manage quizzes and exams with automatic grading.</li>
    <li><strong>📸 Facial Recognition Authentication:</strong> Use webcam-based login for enhanced security.</li>
    <li><strong>📊 Real-time Rankings & Results:</strong> Students can view scores and rankings instantly.</li>
    <li><strong>🔐 Role-based Access Control:</strong> Separate admin, teacher, and student roles.</li>
  </ul>

  <h2>🧰 Tech Stack</h2>
  <ul>
    <li><strong>Backend:</strong> Laravel (PHP 8+)</li>
    <li><strong>Frontend:</strong> Blade templates, HTML, CSS, JavaScript</li>
    <li><strong>Database:</strong> MySQL</li>
    <li><strong>Face Recognition:</strong> JavaScript with webcam integration (e.g., TensorFlow.js or similar)</li>
  </ul>

  <h2>📁 Project Structure</h2>
  <pre><code>
├── app/                   # Laravel controllers, models, services
├── routes/                # Web route definitions
├── database/              # Migrations and seeders
├── resources/views/       # Blade template views
├── public/                # Assets: JS, CSS, face detection
├── config/, bootstrap/, storage/, tests/
├── .env.example, artisan, composer.json, vite.config.js
  </code></pre>

  <h2>⚙️ Installation</h2>
  <pre><code>
# 1. Clone the repository
git clone https://github.com/qppd/educational-assessment.git
cd educational-assessment

# 2. Install dependencies
composer install
npm install
npm run dev

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Edit .env to match your DB credentials

# 5. Run migrations and seed data
php artisan migrate --seed

# 6. Launch the app
php artisan serve
  </code></pre>

  <h2>📸 Facial Recognition Setup</h2>
  <p>This project may use JavaScript and webcam APIs for face recognition. Make sure:</p>
  <ul>
    <li>Webcam access is allowed by the browser.</li>
    <li>Required scripts are correctly loaded in <code>public/</code>.</li>
    <li>Face embeddings or image datasets are managed as needed.</li>
  </ul>

  <h2>🛡️ Security & Permissions</h2>
  <ul>
    <li>Role-based access (Admin, Teacher, Student) is enforced via Laravel middleware.</li>
    <li>No SECURITY.md included in the repo yet.</li>
  </ul>

  <h2>📄 License</h2>
  <p><strong>Note:</strong> This repository does not currently include a license file. Please contact the maintainers before using or contributing.</p>

  <h2>📷 Screenshots</h2>
  <p>Add relevant screenshots of login, dashboard, and exam screens here for better visualization.</p>

  <hr>
  <p style="text-align:center;">Made with ❤️ by <a href="https://github.com/qppd">QPPD</a> - Quezon Province Programmers & Developers</p>
</body>
</html>
