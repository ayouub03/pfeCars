<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Authentification</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,700");
        :root {
            --main-bg-color: #61A3FF;  
        }
        
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }
        html {
            height: 100%;
            box-sizing: border-box;
            font-family: Montserrat, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: 400;
        }
        
        body {
            background-image: url(/images/cap.png);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-size: 65.2%;
            color: #1d2129;
            display: flex;
            perspective: 1600px;
            margin: 0;
            padding: 0;
        }
        
        .version {
            position: absolute;
            bottom: 1em;
            right: 2em;
            border-radius: 4em;
            background: #ff4b2b;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            padding: .8em 2em;
            letter-spacing: .1em;
            transition: transform 80ms ease-in;
        }
        
        h1 {
            font-weight: 700;
            font-size: 3.5em;
            text-align: center;
        }
        
        form input {
            background: #eee;
            border: none;
            padding: 12px 15px;
            margin: .8em 0;
            width: 100%;
            font-size: 1.4em;
        }
        
        span {
            color: #333;
            font-size: 1.4em;
            display: inline-block;
            margin: 15px auto;
            font-weight: 100;
            user-select: none;
        }
        
        label {
            font-size: 1.4em;
            display: inline-block;
            user-select: none;
            &:hover {
                cursor: pointer;
            }
            span {
                font-size: inherit;
                line-height: 1em;
                &::before{
                    content:"";
                    width: 1em;
                    height: 1em;
                    display: inline-block;
                    border: 2px solid #aaa;
                    vertical-align: bottom;
                    transition: all .1s ease-in-out;
                    margin-right: .2em;
                    transform: scale(0.99);
                }
            }
        }
        
        input[type="checkbox"] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            
            &:checked+span::before {
                border-color: #fafafa;
                box-shadow: 0 0 0 2px var(--main-bg-color);
                background: var(--main-bg-color);
                transform: scale(0.8);
            }
            &:focus+span{
                text-decoration: underline; 
            }
            &:checked+span {
                text-decoration: none; 
            }
        } 
        
        span.forget {
            float: right;
        }
        
        span.clearfix {
            clear: both;
            display: table;
        }
        
        span.loginwith {
            display: block;
            width: 100%;
            margin-top: 1em;
            white-space: nowrap;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            &::before {
                content: "";
                display: inline-block;
                width: 42%;
                border-bottom: 1px solid #aaa;
                vertical-align: middle;
                margin-right: 5%;
            }
            &::after {
                content: "";
                display: inline-block;
                width: 45%;
                border-bottom: 1px solid #aaa;
                vertical-align: middle;
                margin-left: 5%;
            }
        }
        
        span.copy {
            display: block;
            font-size: 1em;
            margin-top: auto;
        }
        
        button {
            display: block;
            margin: 1em auto;
            border-radius: 4em;
            border: 1px solid var(--main-bg-color);
            background: var(--main-bg-color);
            color: #fff;
            font-size: 1.2em;
            font-family: Montserrat, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: bold;
            padding: .8em 2em;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            user-select: none;
            svg {
                vertical-align: middle;
            }
        }
        
        button:hover {
            cursor: pointer;
        }
        
        button:active {
            transform: scale(.95);
        }
        
        button:focus {
         outline: 1px solid var(--main-bg-color);
            outline:none;
        }
        
        a {
            transition: all .3s ease;
            cursor: pointer;
            color: #333;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        a:hover svg {
            cursor: pointer;
            transition: all .3s ease;
            stroke: var(--main-bg-color);
        }
        
        #container {
            width: 100%;
            max-width: 80em; 
            min-width: 70.5em;
            height: 50em;
            position: relative;
            border-radius: 2em;
            transform-style: preserve-3d;
            margin: auto; 
            display:flex;
            &>div {
                position: absolute;
                width: 50%;
                height: 100%;
                top: 0;
            }
        }
        
        .content {
            width: 100%;
            height: 100%;
            padding: 0 4em;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            p {
                font-size: 1.4em;
            }
        }
        
        .login {
            left: 0;
            border-radius: 2em 0 0 2em;
            transform-style: preserve-3d; 
            button {
                border-radius: 0px;
                width: 100%;
            }
            svg {
                margin: 1em;
                stroke: #999;
            }
            .content {
                background: #FAFAFA;
                border-radius: 2em 0 0 2em;
            }
            h1 {
                margin-top: auto;
            }
        }
        
        .register {
            right: 0;
            border-radius: 0 20px 20px 0;
            width: 70%; 
            transform-style:preserve-3d;
            button {
                border-radius: 0px;
                width: 100%;
                margin-bottom:auto;
            }
            svg {
                margin: 1em;
                stroke: #999;
            }
            .content {
                border-radius: 0 20px 20px 0;
                background: #FAFAFA;
                padding: 0em 4em;
            }
        }
        
        .page {
            right: 0;
            color: #fff;
            border-radius: 0 20px 20px 0;
            transform-origin: left center;
            transition: animation 1s linear;
            button {
                border-color: #fff;
                background: transparent;
            }
        }
        
        .front {
            background: linear-gradient(-45deg, var(--main-bg-color) 0%, #1d2129 100%) no-repeat 0 0/100%;
            z-index: 3;
        }
        
        .back {
            background: linear-gradient(135deg, var(--main-bg-color) 0%, #1d2129 100%) no-repeat 0 0/200%;
            z-index: 2;
            .content {
                transform: rotateY(180deg);
            }
        }
        
        .active .front {
            animation: rot-front .6s ease-in-out normal forwards;
        }
        
        .active .back {
            animation: rot-back .6s ease-in-out normal forwards;
        }
        
        .close .front {
            animation: close-rot-front .6s ease-in-out normal forwards;
        }
        
        .close .back {
            animation: close-rot-back .6s ease-in-out normal forwards;
        }
        
        @keyframes rot-front {
            from {
                transform: translateZ(2px) rotateY(0deg);
                backface-visibility: hidden 
            }
            to {
                transform: translateZ(1px) rotateY(-180deg);
            }
        }
        
        @keyframes rot-back {
            from {
                transform: translateZ(1px) rotateY(0deg);
            }
            to {
                transform: translateZ(2px) rotateY(-180deg);
            }
        }
        
        
        @keyframes close-rot-front {
            from {
                transform: translateZ(1px) rotateY(-180deg);
            }
            to {
                transform: translateZ(2px) rotateY(0deg);
            }
        }
        
        @keyframes close-rot-back {
            from {
                transform: translateZ(2px) rotateY(-180deg);
            }
            to {
                transform: translateZ(1px) rotateY(0deg);
            }
        }
        
        .active .register .content {
            transform-origin: left center;
            animation: show-register .7s ease-in-out normal forwards
        }
        
        .active .login .content {
            transform-origin: right center;
            animation: hide-login .7s ease-in-out normal forwards;
        }
        
        .close .register .content {
            transform-origin: left center;
            animation: hide-register .7s ease-in-out normal forwards;
        }
        
        .close .login .content {
            transform-origin: right center;
            animation: show-login .7s ease-in-out normal forwards;
        }
        .closeButton {
            position: absolute;
            top: 0.2em;
            right: 0.4em;
            background: none;
            text-decoration: none; 
            border: none;
            z-index: 10;
            color: #333;
            transition: color 0.3s ease;
            font-size: x-large; 
            font-weight: bold;
        }
        
        .closeButton:hover {
            color: #b3becc;
            text-decoration: none;
        }
        
        @keyframes show-register {
            from {
                transform: rotateY(80deg)
            }
            to {
                transform: rotateY(0deg)
            }
        }
        
        @keyframes hide-login {
            from {
                transform: rotateY(0.01deg)
            }
            to {
                transform: rotateY(-80deg)
            }
        }
        
        @keyframes hide-register {
            from {
                transform: rotateY(0.01deg)
            }
            to {
                transform: rotateY(80deg)
            }
        }
        
        @keyframes show-login {
            from {
                transform: rotateY(-80deg)
            }
            to {
                transform: rotateY(0deg)  
            }
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            font-size: 15px;
        }

        .alert-danger ul {
            margin-bottom: 0;
        }

        .alert-danger li {
            list-style-type: none;
        }

        @media screen and (max-width: 768px) {
            .register {
                width: 100%;
            }
            .login,
            .register {
                border-radius: 2em;
            }
        }
    </style>
</head>
<body>
    <div id="container" style=" height: 77%;">

    <div class="login">
    <div class="content">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="mot de passe">
            <div>
                <span class="clearfix"></span>
            </div>
            <button type="submit">Connexion</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <span class="copy">&copy;</span>
    </div>
</div>


        <div class="page front">
			<div class="content">
				<a href="javascript:history.back();" class="closeButton" style="text-decoration: none;">X</a>
				<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
					<circle cx="8.5" cy="7" r="4" />
					<line x1="20" y1="8" x2="20" y2="14" />
					<line x1="23" y1="11" x2="17" y2="11" />
				</svg>
				<h1>Hello, friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button type="" id="register">Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="12" cy="12" r="10" />
						<polyline points="12 16 16 12 12 8" />
						<line x1="8" y1="12" x2="16" y2="12" />
					</svg></button>
			</div>
		</div>
		
    
    
        <div class="page back">
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10 17 15 12 10 7" />
                    <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
                <h1>Re-bienvenue !</h1>
                <p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
                <button type="" id="loginFlip"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 8 8 12 12 16" />
                        <line x1="16" y1="12" x2="8" y2="12" />
                    </svg> Connexion</button>
            </div>
        </div>
        <div class="register">
            <div class="content">
                <h1>S'inscrire</h1>
                <form method="POST" action="{{route('signup')}}">
                @csrf
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                <input type="text" name="full_name" placeholder="Nom complet" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Numéro de téléphone" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                <input type="text" name="cin" placeholder="CIN" required>
                    <span class="clearfix"></span>
                    <button type="submit" >S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        const get = elem => document.getElementById(elem),
                             registerButton = get('register'),
                             loginButton = get('loginFlip'),
                             container = get('container')
         
        registerButton.onclick = () => {
                            // container.className = "active";
                             window.location.href = "{{route('signupView')}}";
        }
        
        loginButton.onclick = () => {
                           // container.className = "close";
                            window.location.href = "{{route('login')}}";
        }
</script>
</body>
</html>
