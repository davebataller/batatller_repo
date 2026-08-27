@extends('layouts.app')

@section('content')
<div class="container container-padding">
    <!-- Basic Information Section - Compact Layout -->
    <section id="about" class="section-margin">
        <div class="card card-padding-large">
            <div class="profile-section">
                <div class="profile-image">
                    <img src="{{ asset('image/me.jpg') }}" alt="Janray T. Bataller">
                </div>
                <div class="profile-content">
                    <h1 class="profile-name">Janray T. Bataller</h1>
                    <p class="profile-title">BSIT 4th Year Student</p>
                    <p class="profile-bio">Smiling where my feet take me.</p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>09108990147</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Background Section - Timeline Layout -->
    <section id="education" class="section-margin">
        <h2 class="section-title">Educational Background</h2>
        <div class="card card-padding-large">
            <div class="timeline">
                <div class="timeline-item">
                    <h3 class="timeline-school">DCCP</h3>
                    <p class="timeline-degree">Bachelor of Information Technology - 4th Year</p>
                    <p class="timeline-year">Ubbog Lipcan, Bangued Abra</p>
                </div>
                <div class="timeline-item">
                    <h3 class="timeline-school">Little Flower High School</h3>
                    <p class="timeline-degree">High School</p>
                    <p class="timeline-year">Poblacion Peñarrubia Abra</p>
                </div>
                <div class="timeline-item">
                    <h3 class="timeline-school">Peñarrubia Central School</h3>
                    <p class="timeline-degree">Elementary</p>
                    <p class="timeline-year">Poblacion Peñarrubia Abra</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section - List Layout -->
    <section id="projects" class="section-margin">
        <h2 class="section-title">Projects</h2>
        <div class="card card-padding-large">
            <div class="projects-list">
                <div class="project-list-item">
                    <div class="project-item-icon" style="background: linear-gradient(to bottom right, #22c55e, #16a34a);">
                        <svg class="project-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <div class="project-item-content">
                        <h3 class="project-title">Web Development Project</h3>
                        <p class="project-description">A responsive web application built with modern technologies focusing on user experience and functionality.</p>
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="project-item-icon" style="background: linear-gradient(to bottom right, #84cc16, #22c55e);">
                        <svg class="project-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <div class="project-item-content">
                        <h3 class="project-title">Database Management System</h3>
                        <p class="project-description">A comprehensive database solution for managing and organizing data efficiently with secure access controls.</p>
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="project-item-icon" style="background: linear-gradient(to bottom right, #14b8a6, #22c55e);">
                        <svg class="project-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="project-item-content">
                        <h3 class="project-title">Mobile Application</h3>
                        <p class="project-description">A cross-platform mobile application designed to provide seamless user experience across different devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GitHub Repository Links Section -->
    <section id="github" class="section-margin">
        <h2 class="section-title">GitHub Repositories</h2>
        <div class="card card-padding-large">
            <div class="github-links">
                <a href="https://github.com/davebataller" target="_blank" class="github-button github-button-dark">
                    <svg class="github-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span>View GitHub Profile</span>
                </a>
                <a href="https://github.com/davebataller/batatller_repo" target="_blank" class="github-button github-button-indigo">
                    <svg class="github-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span>Project Repository</span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection