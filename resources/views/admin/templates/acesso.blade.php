<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>{{$title}} | Administrativo Golden Service</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="adm/assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="adm/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="adm/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<script>
            var defaultThemeMode = "light";
            var themeMode;
            if ( document.documentElement ) {
                if ( document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                }else{
                    if ( localStorage.getItem("data-theme") !== null ) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url('/adm/assets/media/auth/bg10.jpeg'); } [data-theme="dark"] body { background-image: url('/adm/assets/media/auth/bg10-dark.jpeg'); }</style>
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-lg-row-fluid">
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/adm/assets/media/auth/agency.png" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/adm/assets/media/auth/agency-dark.png" alt="" />
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Administrativo Golden Service</h1>
					</div>
				</div>
                @yield('corpo')
			</div>
		</div>
		<script src="adm/assets/plugins/global/plugins.bundle.js"></script>
		<script src="adm/assets/js/scripts.bundle.js"></script>
		<script src="adm/assets/js/custom/authentication/sign-in/general.js"></script>
	</body>
</html>
