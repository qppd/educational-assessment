<h1 align="center">🎓 Educational Assessment System</h1>

<p align="center">
  A Laravel-based web application for managing academic assessments—featuring quizzes, student profiles, secure face-recognition login, exams, and student rankings.
</p>

<hr>

<h2>🚀 Features</h2>
<ul>
  <li><strong>👥 Student Profiles:</strong> Manage student information with ease.</li>
  <li><strong>📝 Quiz & Exams Module:</strong> Create and grade timed assessments automatically.</li>
  <li><strong>📸 Facial Recognition Authentication:</strong> Secure login using webcam face detection.</li>
  <li><strong>📊 Real-time Rankings & Results:</strong> View leaderboards and personal scores.</li>
  <li><strong>🔐 Secure Role-Based Access:</strong> Admin, Teacher, and Student roles with permissions.</li>
</ul>

<hr>

<h2>🧰 Tech Stack</h2>
<ul>
  <li><strong>Backend:</strong> Laravel (PHP 8+)</li>
  <li><strong>Frontend:</strong> Blade templates, JavaScript, HTML/CSS</li>
  <li><strong>Database:</strong> MySQL</li>
  <li><strong>Facial Recognition:</strong> JavaScript & browser webcam integration</li>
</ul>

<hr>

<h2>📁 Project Structure</h2>

<pre>
├── app/                 # Controllers, Models, Middleware
├── database/            # Migrations and Seeders
├── public/              # Assets (JS/CSS/Webcam scripts)
├── resources/views/     # Blade templates (UI)
├── routes/web.php       # App routes
├── .env.example         # Environment template
├── composer.json        # PHP dependencies
└── package.json         # JS build tools
</pre>

<hr>

<h2>⚙️ Installation Guide</h2>

<ol>
  <li><strong>Clone the repository:</strong>
    <pre><code>git clone https://github.com/qppd/educational-assessment.git
cd educational-assessment</code></pre>
  </li>

  <li><strong>Install dependencies:</strong>
    <pre><code>composer install
npm install
npm run dev</code></pre>
  </li>

  <li><strong>Configure environment:</strong>
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
    Edit <code>.env</code> with your database credentials.
  </li>

  <li><strong>Run migrations and seed database:</strong>
    <pre><code>php artisan migrate --seed</code></pre>
  </li>

  <li><strong>Start the Laravel development server:</strong>
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<hr>

<h2>📸 Facial Recognition Setup</h2>
<ul>
  <li>Ensure webcam access is enabled in your browser.</li>
  <li>Facial login is likely powered by JavaScript in the frontend.</li>
  <li>Backend may require trained embeddings or external API integration (not yet documented).</li>
</ul>

<hr>

<h2>📄 License</h2>
<p>This project currently has <strong>no license file</strong>. Please contact the maintainers before using it in production or derivative works.</p>

<hr>

<h2>🙌 Acknowledgements</h2>
<ul>
  <li>Laravel Framework</li>
  <li>JavaScript Webcam API</li>
  <li>QPPD (Quezon Province Programmers and Developers)</li>
</ul>
