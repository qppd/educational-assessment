<h1 align="center">🎓 Educational Assessment System</h1>

<p align="center">
  A Laravel-based web application designed to streamline academic evaluations. Features include quizzes, student profiles, face-recognition authentication, dynamic exams, and real-time rankings.
</p>

<hr>

<h2>🚀 Features</h2>
<ul>
  <li><strong>👥 Student Profiles:</strong> Manage detailed student information effortlessly.</li>
  <li><strong>📝 Quiz & Exams Module:</strong> Create timed assessments with automated grading logic.</li>
  <li><strong>📸 Facial Recognition Authentication:</strong> Secure login and exam access via webcam-based face recognition.</li>
  <li><strong>📊 Real-time Rankings & Results:</strong> View student performance, leaderboards, and analytics.</li>
  <li><strong>🔐 Role-Based Access Control:</strong> Secure access for Admin, Teacher, and Student roles with scoped permissions.</li>
</ul>

<hr>

<h2>🧰 Tech Stack</h2>
<ul>
  <li><strong>Backend:</strong> Laravel (PHP 8+)</li>
  <li><strong>Frontend:</strong> Blade templates, JavaScript, HTML/CSS, Bootstrap (AdminLTE theme)</li>
  <li><strong>Database:</strong> MySQL</li>
  <li><strong>Facial Recognition:</strong> FaceAPI.js (browser-based face detection)</li>
</ul>

<hr>

<h2>📁 Project Structure</h2>

<pre>
├── app/                 # Core application logic (Controllers, Models, Middleware)
├── database/            # Migrations and Seeders for all tables
├── public/              # Frontend assets (JS, CSS, Webcam scripts)
├── resources/views/     # Blade UI templates
├── routes/web.php       # Route definitions
├── .env.example         # Environment variable template
├── composer.json        # PHP dependencies
└── package.json         # JavaScript dependencies
</pre>

<hr>

<h2>⚙️ Installation Guide</h2>

<ol>
  <li><strong>Clone the repository:</strong>
    <pre><code>git clone https://github.com/qppd/educational-assessment.git
cd educational-assessment</code></pre>
  </li>

  <li><strong>Install PHP and JS dependencies:</strong>
    <pre><code>composer install
npm install
npm run dev</code></pre>
  </li>

  <li><strong>Configure your environment:</strong>
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
    Update the <code>.env</code> file with your database and mail settings.
  </li>

  <li><strong>Run migrations and seeders:</strong>
    <pre><code>php artisan migrate --seed</code></pre>
  </li>

  <li><strong>Start the local server:</strong>
    <pre><code>php artisan serve</code></pre>
    Visit <code>http://localhost:8000</code> in your browser.
  </li>
</ol>

<hr>

<h2>📸 Facial Recognition Setup</h2>
<ul>
  <li>Ensure your browser allows webcam access.</li>
  <li>Face recognition is handled client-side using <code>face-api.js</code>.</li>
  <li>Training and detection scripts are located in the <code>public/js</code> folder.</li>
</ul>

<hr>

<h2>📄 License</h2>

<p>
  This project is open-source and available under the <strong>MIT License</strong>.
</p>

<pre>
MIT License

Copyright (c) 2025 QPPD

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...
</pre>

<hr>

<h2>🙌 Acknowledgements</h2>
<ul>
  <li>QPPD (Quezon Province Programmers and Developers)</li>
  <li>Laravel & PHP Community</li>
  <li>FaceAPI.js (for face recognition)</li>
  <li>AdminLTE Bootstrap Theme</li>
</ul>
