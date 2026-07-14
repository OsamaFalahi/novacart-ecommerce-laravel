@extends('frontend.layouts.master')

@section('title','NovaCart || Register Page')

@section('main-content')
    <!-- Modern Register Section -->
    <section class="modern-auth-section">
        <div class="auth-container">
            <div class="auth-card">
                <!-- Left Side - Branding -->
                <div class="auth-branding">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <h2>Join NovaCart</h2>
                            <p>Start Your Shopping Journey Today</p>
                        </div>
                        <div class="brand-features">
                            <div class="feature-item">
                                <i class="fas fa-user-plus"></i>
                                <span>Create Account</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-gift"></i>
                                <span>Exclusive Offers</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-heart"></i>
                                <span>Save Favorites</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Register Form -->
                <div class="auth-form-container">
                    <div class="auth-header">
                        <h2>Create Account</h2>
                        <p>Join us and discover amazing products</p>
                    </div>
                    
                    <form class="auth-form" method="post" action="{{route('register.submit')}}">
                        @csrf
                        <div class="form-group-modern">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Full Name" required="required" value="{{old('name')}}">
                            </div>
                            @error('name')
                                <span class="error-message">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group-modern">
                            <div class="input-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email Address" required="required" value="{{old('email')}}">
                            </div>
                            @error('email')
                                <span class="error-message">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group-modern">
                            <div class="input-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" required="required" value="{{old('password')}}">
                            </div>
                            @error('password')
                                <span class="error-message">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group-modern">
                            <div class="input-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" required="required" value="{{old('password_confirmation')}}">
                            </div>
                            @error('password_confirmation')
                                <span class="error-message">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="auth-btn primary">
                            <span>Create Account</span>
                            <i class="fas fa-user-plus"></i>
                        </button>
                    </form>
                    
                    <div class="auth-divider">
                        <span>OR SIGN UP WITH</span>
                    </div>
                    
                    <div class="social-login">
                        <a href="{{route('login.redirect','facebook')}}" class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{route('login.redirect','google')}}" class="social-btn google">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="{{route('login.redirect','github')}}" class="social-btn github">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    
                    <div class="auth-footer">
                        <p>Already have an account? <a href="{{route('login.form')}}" class="login-link">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
/* Modern Auth Styles */
.modern-auth-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    position: relative;
    overflow: hidden;
}

.modern-auth-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
    background-size: cover;
}

.auth-container {
    width: 100%;
    max-width: 1000px;
    position: relative;
    z-index: 1;
}

.auth-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 650px;
}

.auth-branding {
    background: linear-gradient(135deg, #00cec9 0%, #00b8b8 100%);
    color: white;
    padding: 60px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
}

.auth-branding::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.brand-content {
    position: relative;
    z-index: 1;
}

.brand-logo h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
    background: linear-gradient(45deg, #fff, #6c5ce7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.brand-logo p {
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 40px;
}

.brand-features {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1rem;
}

.feature-item i {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.auth-form-container {
    padding: 60px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.auth-header {
    text-align: center;
    margin-bottom: 40px;
}

.auth-header h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.auth-header p {
    color: #666;
    font-size: 1rem;
}

.auth-form {
    margin-bottom: 30px;
}

.form-group-modern {
    margin-bottom: 20px;
}

.input-icon {
    position: relative;
}

.input-icon i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #00cec9;
    font-size: 1.1rem;
}

.input-icon input {
    width: 100%;
    padding: 15px 15px 15px 45px;
    border: 2px solid #e1e8ed;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.input-icon input:focus {
    outline: none;
    border-color: #00cec9;
    background: white;
    box-shadow: 0 0 0 4px rgba(0, 206, 201, 0.1);
}

.error-message {
    color: #e74a3b;
    font-size: 0.875rem;
    margin-top: 5px;
    display: block;
}

.auth-btn {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 30px;
}

.auth-btn.primary {
    background: linear-gradient(135deg, #00cec9 0%, #00b8b8 100%);
    color: white;
}

.auth-btn.primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 206, 201, 0.3);
}

.auth-divider {
    text-align: center;
    margin: 30px 0;
    position: relative;
}

.auth-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: #e1e8ed;
}

.auth-divider span {
    background: white;
    padding: 0 20px;
    color: #666;
    font-size: 0.875rem;
    position: relative;
}

.social-login {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 30px;
}

.social-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #e1e8ed;
    background: white;
    color: #666;
}

.social-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.social-btn.facebook:hover {
    background: #1877f2;
    border-color: #1877f2;
    color: white;
}

.social-btn.google:hover {
    background: #ea4335;
    border-color: #ea4335;
    color: white;
}

.social-btn.github:hover {
    background: #333;
    border-color: #333;
    color: white;
}

.auth-footer {
    text-align: center;
}

.auth-footer p {
    color: #666;
    font-size: 0.9rem;
}

.login-link {
    color: #00cec9;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.login-link:hover {
    color: #00b8b8;
}

/* Responsive Design */
@media (max-width: 768px) {
    .auth-card {
        grid-template-columns: 1fr;
        max-width: 400px;
    }
    
    .auth-branding {
        padding: 40px 30px;
        text-align: center;
    }
    
    .auth-form-container {
        padding: 40px 30px;
    }
    
    .brand-logo h2 {
        font-size: 2rem;
    }
    
    .auth-header h2 {
        font-size: 1.5rem;
    }
}
</style>
@endpush