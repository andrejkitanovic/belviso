//Particles

let particlesJSON = {
	particles: {
		number: {
			value: 60,
			density: {
				enable: true,
				value_area: 800
			}
		},
		color: {
			value: '#FFFFFF'
		},
		shape: {
			type: 'circle',
			stroke: {
				width: 0,
				color: '#FFFFFF'
			},
			polygon: {
				nb_sides: 5
			},
			image: {
				src: '',
				width: 100,
				height: 100
			}
		},
		opacity: {
			value: 0.8,
			random: true
		},
		size: {
			value: 20,
			random: true
		},
		line_linked: {
			enable: true,
			distance: 200,
			color: '#FFFFFF',
			opacity: 0.3,
			width: 3
		},
		move: {
			enable: true,
			speed: 3,
			direction: 'bottom',
			random: true,
			straight: false,
			out_mode: 'out',
			bounce: false,
			attract: {
				enable: false,
				rotateX: 600,
				rotateY: 1200
			}
		}
	},
	interactivity: {
		detect_on: 'canvas',
		events: {
			onhover: {
				enable: true,
				mode: 'repulse'
			},
			onclick: {
				enable: true,
				mode: 'grab'
			},
			resize: true
		},
		modes: {
			grab: {
				distance: 500,
				line_linked: {
					opacity: 0.7
				}
			},
			bubble: {
				distance: 300,
				size: 10,
				duration: 1,
				opacity: 1,
				speed: 1
			},
			repulse: {
				distance: 100,
				duration: 0.4
			},
			push: {
				particles_nb: 1
			},
			remove: {
				particles_nb: 10
			}
		}
	},
	retina_detect: true
};

particlesJS('particles-js', particlesJSON);
