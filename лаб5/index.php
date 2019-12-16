<!DOCTYPE html>
<html>
<head>
	<title>Главная страница</title>

	<link href="https://use.fontawesome.com/ff295dfd4d.css" media="all" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>

	<?/*Хедер начало*/?>
	<div class="header row no-gutters pt-3 pb-3">
		
		<div class="logo col-5 text-center pt-2">
			<a href="/">
				<img src="/images/logo.png" />
			</a>
		</div>

		<div class="header-cotacts-menu col-7 d-flex flex-column">
			<div class="header-contacts mb-4">
				<ul class="d-flex flex-row mb-0">
					<li class="d-flex align-items-center">
						<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.8373 0H1.1627C0.523313 0 0 0.522821 0 1.1627V16.0511C0 16.6909 0.523313 17.2142 1.1627 17.2142H8.8373C9.47669 17.2142 10 16.6919 10 16.0515V1.1627C10 0.522821 9.47669 0 8.8373 0ZM3.77238 0.838088H6.22762C6.30533 0.838088 6.36829 0.901043 6.36829 0.979245C6.36829 1.05695 6.30533 1.11991 6.22762 1.11991H3.77238C3.69467 1.11991 3.63171 1.05695 3.63171 0.979245C3.63171 0.901043 3.69467 0.838088 3.77238 0.838088ZM5 16.6329C4.67883 16.6329 4.41865 16.3727 4.41865 16.0511C4.41865 15.7294 4.67883 15.4697 5 15.4697C5.32117 15.4697 5.58135 15.7294 5.58135 16.0511C5.58135 16.3727 5.32117 16.6329 5 16.6329ZM9.19093 15.0625H0.809069V1.84389H9.19093V15.0625Z" fill="#005FA3"/>
						</svg>
						<a href="tel:81112223344" class="ml-3 header-phone text-decoration-none">8 (111) 222-33-44</a>
					</li>
					<li class="d-flex align-items-center">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5C16.994 3.80809 13.1919 0.00601673 8.5 0ZM8.86465 16.2525V14.7574C8.86465 14.556 8.70138 14.3928 8.5 14.3928C8.29862 14.3928 8.13535 14.556 8.13535 14.7574V16.2525C4.13691 16.0616 0.938428 12.8631 0.747533 8.86465H2.2426C2.44398 8.86465 2.60725 8.70138 2.60725 8.5C2.60725 8.29862 2.44398 8.13535 2.2426 8.13535H0.747533C0.938428 4.13691 4.13691 0.938428 8.13535 0.747533V2.2426C8.13535 2.44398 8.29862 2.60725 8.5 2.60725C8.70138 2.60725 8.86465 2.44398 8.86465 2.2426V0.747533C12.8631 0.938428 16.0616 4.13691 16.2525 8.13535H14.7574C14.556 8.13535 14.3928 8.29862 14.3928 8.5C14.3928 8.70138 14.556 8.86465 14.7574 8.86465H14.761H16.2561C16.0651 12.8644 12.8645 16.0634 8.86465 16.2525Z" fill="#005FA3"/>
						<path d="M12.3471 11.8913L8.86465 8.35049V4.67117C8.86465 4.46979 8.70137 4.30652 8.5 4.30652C8.29862 4.30652 8.13535 4.46979 8.13535 4.67117V8.5C8.13576 8.59568 8.17373 8.68734 8.24109 8.75526L11.8256 12.4018C11.9666 12.5458 12.1976 12.5482 12.3416 12.4072C12.4856 12.2662 12.488 12.0352 12.3471 11.8913Z" fill="#005FA3"/>
						</svg>
						<span class="ml-3">Пн-Пт 10:00-18:00</span>
					</li>
					<li class="d-flex align-items-center">
						<svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.6115 0H2.73165C1.22485 0 0 1.22485 0 2.73165V14.2684C0 15.7752 1.22485 17 2.73165 17H19.6069C21.1137 17 22.3385 15.7752 22.3385 14.2684V2.73627C22.3431 1.22947 21.1183 0 19.6115 0ZM21.0952 14.2684C21.0952 15.0865 20.4296 15.752 19.6115 15.752H2.73165C1.91354 15.752 1.24796 15.0865 1.24796 14.2684V2.73627C1.24796 1.91816 1.91354 1.25258 2.73165 1.25258H19.6069C20.425 1.25258 21.0905 1.91816 21.0905 2.73627V14.2684H21.0952Z" fill="#005FA3"/>
							<path d="M14.088 8.35673L19.5513 3.45733C19.8055 3.22623 19.8287 2.83335 19.5975 2.57451C19.3664 2.3203 18.9736 2.29719 18.7147 2.52829L11.1807 9.29039L9.71093 7.97772C9.7063 7.9731 9.70168 7.96848 9.70168 7.96386C9.66933 7.9315 9.63697 7.90377 9.59999 7.87604L3.61903 2.52367C3.36019 2.29257 2.96731 2.31568 2.73621 2.57451C2.50511 2.83335 2.52822 3.22623 2.78705 3.45733L8.31506 8.39833L2.81016 13.552C2.56057 13.7877 2.54671 14.1806 2.78243 14.4348C2.90723 14.5642 3.07362 14.6335 3.24002 14.6335C3.39255 14.6335 3.54507 14.5781 3.66525 14.4671L9.25334 9.23955L10.7694 10.5938C10.8896 10.7001 11.0375 10.751 11.1854 10.751C11.3333 10.751 11.4858 10.6955 11.6014 10.5892L13.159 9.19333L18.7147 14.4717C18.8349 14.5873 18.9921 14.6428 19.1446 14.6428C19.311 14.6428 19.4728 14.5781 19.5975 14.4486C19.8333 14.199 19.824 13.8015 19.5744 13.5658L14.088 8.35673Z" fill="#005FA3"/>
						</svg>

						<a href="mailto:order@buhone.ru" class="ml-3 text-decoration-none header-email">order@buhone.ru</a>
					</li>
					<li class="d-flex align-items-center">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.4882 0C5.05271 0 2.25781 2.7949 2.25781 6.23038C2.25781 7.80857 3.25222 10.0384 5.21354 12.8579C6.64711 14.919 8.05708 16.5139 8.11648 16.5808L8.4882 17L8.86005 16.5808C8.91932 16.5139 10.3293 14.919 11.763 12.8579C13.7242 10.0384 14.7187 7.80857 14.7187 6.23038C14.7187 2.7949 11.9237 0 8.4882 0ZM10.9525 12.2823C9.98351 13.6763 9.00414 14.876 8.4882 15.4881C7.97355 14.8777 6.99782 13.6825 6.02948 12.2903C4.21226 9.67793 3.2517 7.58237 3.2517 6.23038C3.2517 3.34301 5.60082 0.993889 8.4882 0.993889C11.3757 0.993889 13.7247 3.34301 13.7247 6.23038C13.7247 7.58095 12.7661 9.67365 10.9525 12.2823Z" fill="#005FA3"/>
							<path d="M8.48821 2.30267C6.46062 2.30267 4.8111 3.95219 4.8111 5.97979C4.8111 8.00739 6.46062 9.65704 8.48821 9.65704C10.5159 9.65704 12.1655 8.00739 12.1655 5.97979C12.1655 3.95219 10.5159 2.30267 8.48821 2.30267ZM8.48821 8.66315C7.00873 8.66315 5.80499 7.4594 5.80499 5.97979C5.80499 4.50031 7.00873 3.29656 8.48821 3.29656C9.96783 3.29656 11.1716 4.50031 11.1716 5.97979C11.1716 7.4594 9.96783 8.66315 8.48821 8.66315Z" fill="#005FA3"/>
						</svg>

						<span class="ml-3">Невский пр. 130</span>
					</li>
				</ul>

			</div>

			<div class="header-menu">
				<ul class="d-flex flex-row mb-0">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Кейсы</a></li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
		
	</div>
	<?/*Хедер конец*/?>

	<?/*Контент начало*/?>
	<div class="content-wrapper">
		
		<?/*Главный слайдер начало*/?>
		<div class="main-slider">
			<div class="main-slide">
				<div class="container">
					<div class="slide-wrap">
						<div class="title-main-slide">Бухгалтерские услуги<br>в Санкт-Петербурге</div>
						<a href="#" class="our-presentations text-decoration-none d-flex justify-content-center align-items-center">Наши презентации</a>
					</div>

					<div class="slider-dots">
						<span></span>
						<span></span>
						<span class="active-dot"></span>
						<span></span>
					</div>

					<div class="prev-next-btns">
						<button class="prev-btn">
							<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/>
							</svg>
						</button>
						<button class="next-btn">
							<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
		<?/*Главный слайдер конец*/?>

		<?/*Услуги начало*/?>
		<div class="services-wrapper">
			<div class="services container">
				<div class="services-title-1 mb-5">Наши услуги</div>
				<div class="services-title-2 mb-5 pb-4">Мы специализируемся</div>

				<div class="services-list d-flex flex-row flex-wrap">
					<div class="service-item pr-3 mb-1">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
					<div class="service-item pl-3 pr-3 mb-1">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
					<div class="service-item pl-3 mb-1">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
					<div class="service-item pr-3 mt-4">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
					<div class="service-item pl-3 pr-3 mt-4">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
					<div class="service-item pl-3 mt-4">
						<a href="#" class="h-100 w-100 d-flex flex-column justify-content-end">
							<span class="ml-5 mb-5">Бухгалтерское<br>обслуживание</span>
						</a>
					</div>
				</div>

			</div>
		</div>
		<?/*Услуги конец*/?>

		<?/*О нас начало*/?>
		<div class="about-us-wrapper  row ml-0 mr-0">
			<div class="container">
				<div class="row ml-0 mr-0">
					<div class="col-6">
						<div class="rew-title-1 mb-4">О нас</div>
						<div class="rew-title-2">Компания</div>
						<div class="rew-title-3 mb-5">ИвановПром</div>

						<div class="rew-about">Lorem Ipsum - это текст-"рыба", часто используемый в<br>печати и вэб-дизайне. Lorem Ipsum является<br>стандартной "рыбой" для текстов на латинице с<br>начала XVI века. В то время некий безымянный<br>печатник создал большую коллекцию размеров и<br>форм шрифтов, используя Lorem Ipsum для<br>распечатки образцов. Lorem Ipsum не только успешно<br>пережил без заметных изменений пять веков, но и<br>перешагнул в электронный дизайн.</div>
					</div>
					

					<div class="rew-items row col-6 pl-0 pr-0">
						<div class="col-6 rew-item mb-4">
							<a href="#" class="d-flex flex-column justify-content-between">
								<div class="rew-text-1">90</div>
								<div class="rew-text-2 pb-5">Завершено<br>крупных сделок</div>
								<div class="rew-text-3">Все кейсы</div>
							</a>
						</div>
						<div class="col-6 rew-item mb-4">
							<a href="#" class="d-flex flex-column justify-content-between">
								<div class="rew-text-1">90</div>
								<div class="rew-text-2 pb-5">Завершено<br>крупных сделок</div>
								<div class="rew-text-3">Все кейсы</div>
							</a>
						</div>
						<div class="col-6 rew-item">
							<a href="#" class="d-flex flex-column justify-content-between">
								<div class="rew-text-1">90</div>
								<div class="rew-text-2 pb-5">Завершено<br>крупных сделок</div>
								<div class="rew-text-3">Все кейсы</div>
							</a>
						</div>
						<div class="col-6 rew-item">
							<a href="#" class="d-flex flex-column justify-content-between">
								<div class="rew-text-1">90</div>
								<div class="rew-text-2 pb-5">Завершено<br>крупных сделок</div>
								<div class="rew-text-3">Все кейсы</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?/*О нас конец*/?>

		<?/*Наши клиенты начало*/?>
		<div class="our-clients-wrapper">
			<div class="our-clients-slider">
				<div class="container">
					<div class="slide-wrap">
						<div class="our-clients">Наши клиенты</div>
						<div class="work-with-us-title">С нами работают</div>
						<div class="row work-with-us-wrap">
							<div class="col-3">
								<img class="w-100" src="/images/microsoft.png" />
							</div>
							<div class="col-3">
								<img class="w-100" src="/images/microsoft.png" />
							</div>
							<div class="col-3">
								<img class="w-100" src="/images/microsoft.png" />
							</div>
							<div class="col-3">
								<img class="w-100" src="/images/microsoft.png" />
							</div>
						</div>
					</div>

					<div class="slider-dots">
						<span></span>
						<span></span>
						<span class="active-dot"></span>
						<span></span>
					</div>

					<div class="prev-next-btns">
						<button class="prev-btn">
							<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/>
							</svg>
						</button>
						<button class="next-btn">
							<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
		<?/*Наши клиенты конец*/?>

		<?/*Отзывы начало*/?>
		<div class="rews-wrapper">
			<div class="rews-slider">
				<div class="container">

					<div class="rews-title">Отзывы</div>
					<div class="your-thanks">Ваши благодарности</div>

					<div class="slide-wrap">

						<div class="rew-block w-100">
							<div class="rew-text">
								Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. 
							</div>
							<div class="rew-author d-flex align-items-center">
								<div class="photo-author-wrap">
									<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<circle cx="40" cy="40" r="40" fill="#C4C4C4"/>
									<circle cx="40" cy="40" r="40" fill="url(#pattern0)"/>
									<defs>
									<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0" transform="translate(0 0.0093458) scale(0.0046729)"/>
									</pattern>
									<image id="image0" width="214" height="317" xlink:href="data:image/jpeg;base64,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"/>
									</defs>
									</svg>
								</div>			
								<div class="name-author-wrap d-flex flex-column">
									<div class="name-author">Екатерина Иванова</div>
									<div class="work-author">Директор ООО “Раз-два”</div>
								</div>					
							</div>
						</div>

						<div class="slider-dots">
							<span></span>
							<span></span>
							<span class="active-dot"></span>
							<span></span>
						</div>

						<div class="prev-next-btns">
							<button class="prev-btn">
								<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/>
								</svg>
							</button>
							<button class="next-btn">
								<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/>
								</svg>
							</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?/*Отзывы конец*/?>

		<?/*Контакты начало*/?>
		<div class="contact-us-wrapper">
			<div class="contact-us container">
				<div class="row no-gutters">
					<div class="col-6">
						<div class="title-contact mb-5">Связь с нами</div>
						<div class="text-contact mb-5">У вас остались вопросы? Напишите нам - мы ответим<br>в ближайшее время!</div>
						<div class="contact-phone-email pt-3 d-flex">
							<div class="contact-phone d-flex align-items-center">
								<svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.4011 0H2.02629C0.912 0 0 0.911143 0 2.02629V27.9729C0 29.088 0.912 30 2.02629 30H15.4011C16.5154 30 17.4274 29.0897 17.4274 27.9737V2.02629C17.4274 0.911143 16.5154 0 15.4011 0ZM6.57429 1.46057H10.8531C10.9886 1.46057 11.0983 1.57029 11.0983 1.70657C11.0983 1.842 10.9886 1.95171 10.8531 1.95171H6.57429C6.43886 1.95171 6.32914 1.842 6.32914 1.70657C6.32914 1.57029 6.43886 1.46057 6.57429 1.46057ZM8.71371 28.9869C8.154 28.9869 7.70057 28.5334 7.70057 27.9729C7.70057 27.4123 8.154 26.9597 8.71371 26.9597C9.27343 26.9597 9.72686 27.4123 9.72686 27.9729C9.72686 28.5334 9.27343 28.9869 8.71371 28.9869ZM16.0174 26.25H1.41V3.21343H16.0174V26.25Z" fill="white"/>
								</svg>

								<a href="tel:81112223344" class="text-decoration-none ml-3">+7 (111) 222-33-44</a>
							</div>
							<div class="contact-email d-flex align-items-center ml-5">
								<svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M34.6085 0H4.82055C2.1615 0 0 2.1615 0 4.82055V25.1794C0 27.8385 2.1615 30 4.82055 30H34.6003C37.2594 30 39.4209 27.8385 39.4209 25.1794V4.82871C39.429 2.16966 37.2675 0 34.6085 0ZM37.2268 25.1794C37.2268 26.6232 36.0522 27.7977 34.6085 27.7977H4.82055C3.37684 27.7977 2.20228 26.6232 2.20228 25.1794V4.82871C2.20228 3.38499 3.37684 2.21044 4.82055 2.21044H34.6003C36.044 2.21044 37.2186 3.38499 37.2186 4.82871V25.1794H37.2268Z" fill="white"/>
									<path d="M24.8612 14.7472L34.5023 6.10121C34.951 5.69338 34.9917 5.00006 34.5839 4.54329C34.1761 4.09468 33.4828 4.0539 33.026 4.46173L19.7307 16.3948L17.1369 14.0784C17.1288 14.0702 17.1206 14.0621 17.1206 14.0539C17.0635 13.9968 17.0064 13.9479 16.9412 13.8989L6.38651 4.45357C5.92974 4.04574 5.23643 4.08652 4.8286 4.54329C4.42077 5.00006 4.46156 5.69338 4.91833 6.10121L14.6736 14.8206L4.95911 23.9152C4.51865 24.3312 4.49418 25.0245 4.91017 25.4732C5.1304 25.7015 5.42403 25.8239 5.71767 25.8239C5.98684 25.8239 6.25601 25.726 6.46808 25.5303L16.3294 16.3051L19.0048 18.695C19.2169 18.8826 19.4779 18.9723 19.7389 18.9723C19.9999 18.9723 20.2691 18.8745 20.473 18.6869L23.2218 16.2236L33.026 25.5384C33.2381 25.7423 33.5154 25.8402 33.7846 25.8402C34.0782 25.8402 34.3637 25.726 34.5839 25.4976C34.9999 25.0572 34.9836 24.3557 34.5431 23.9397L24.8612 14.7472Z" fill="white"/>
								</svg>

								<a href="mailto:order@bu-one.ru" class="text-decoration-none ml-3">order@bu-one.ru</a>
							</div>
						</div>
					</div>
					<div class="col-6 pl-3 pr-3">
						<form class="d-flex flex-column form-contact">
							<div class="row no-gutters mb-5">
								<div class="col-6 d-flex flex-column pr-3">
									<span class="form-title-block">Имя</span>
									<input class="input-contact" type="text" name="" placeholder="Иван">
								</div>
								<div class="col-6 d-flex flex-column pl-3">
									<span class="form-title-block">Фамилия</span>
									<input class="input-contact" type="text" name="" placeholder="Иванов">
								</div>
							</div>
							<div class="d-flex flex-column">
								<span class="form-title-block mb-2">Сообщение</span>
								<textarea placeholder="Ваше сообщение"></textarea>
							</div>

							<div class="d-flex justify-content-end">
								<input class="btn-form-contact mt-5" type="submit" name="" value="Отправить сообщение">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?/*Контакты конец*/?>
	</div>
	<?/*Контент конец*/?>

	<?/*Футер начало*/?>
	<div class="footer row no-gutters pt-5 pb-5">
		<div class="col-6 text-center">2019 (с) Все права защищены. БухОне.ру</div>
		<div class="col-6 text-center">Разработано: BuhOne</div>
	</div>
	<?/*Футер конец*/?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/ff295dfd4d.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>