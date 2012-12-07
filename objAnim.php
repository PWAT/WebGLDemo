<?php #Script 1.3 - index.php

$ptitle = 'Demo project';
$page_header = 'Obj Anim Page';

include ('includes/header.php');
?> 
   <div id="content">
		  <h1>OBJ Anim Page</h1>
				<div id="webgl" oncontextmenu="return false;">
				</div>

		<script>

			var container, stats;

			var camera, scene, renderer;

			var mouseX = 0, mouseY = 0;

			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;
			
			var sceneTime = 0;
			var animationRate = 16;  //15ms
			var elapsedTime = undefined;
			var initialTime = undefined;
			
			
			init();
			animate();
			
			// function onFrame() {
				// elapsedTime = (new Date).getTime() - initialTime;
				// if (elapsedTime < animationRate) { return; } //come back later
				// var steps = math.floor(elapsedTime / animationRate);
				// while (steps > 0) {
				// animate();
				// steps -= 1;
				// }
			  // initialTime = (new Date).getTime();
			// }
			
			// function startAnimation() {
				// initialTime = (new Date).getTime();
				// setInterval(onFrame, animationRate/1000);
				// }


			function init() {

				container = document.getElementById( 'webgl' );
				var width = container.clientWidth;
				var height = container.clientHeight;

				camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.z = 500;

				// scene

				scene = new THREE.Scene();

				var ambient = new THREE.AmbientLight( 0x101030 );
				scene.add( ambient );

				var directionalLight = new THREE.DirectionalLight( 0xffeedd );
				directionalLight.position.set( 0, 0, 1 ).normalize();
				scene.add( directionalLight );

				// texture

				var texture = new THREE.Texture();

				var loader = new THREE.ImageLoader();
				
				loader.addEventListener( 'load', function ( event ) {

					texture.image = event.content;
					texture.needsUpdate = true;

				} );
					
				// model
				loader.load( 'images/Philip/philip_003_00.jpg' );
				
				setTimeout(function() {
					renderer.deallocateTexture( 'images/Philip/Philip_003_00.jpg' );					
				},550);
				
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_50.jpg' );
				}, 500);
				
				setTimeout(function() {
					renderer.deallocateTexture( 'images/Philip/Philip_003_50.jpg' );				
				},1050);
				
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_80.jpg' );
				}, 1000);
				
				setTimeout(function() {
					renderer.deallocateTexture( 'images/Philip/Philip_003_80.jpg' );					
				},2050);
				
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_50.jpg' );
				}, 2000);
				
								
				setTimeout(function() {
					renderer.deallocateTexture( 'images/Philip/Philip_003_50.jpg' );					
				},3000);
				
				var loader = new THREE.OBJLoader();
				loader.addEventListener( 'load', function ( event ) {
					
					var object = event.content;

					for ( var i = 0, l = object.children.length; i < l; i ++ ) {

						object.children[ i ].material.map = texture;

					}

						object.position.y = - 1;
						
						scene.add( object );
						
						//Remove all objects to end animation
					  setTimeout(function() {
						  scene.remove( object );
					  },20000);	
											
						});
					
				
					//Works but all on top of each other so setTimeOuts
				loader.load( 'images/Philip/philip_003_00.obj' );
				
				setTimeout(function() {
					renderer.deallocateObject( 'images/Philip/Philip_003_00.obj' );					
				},550);
				
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_50.obj' );
				}, 500);
				
				setTimeout(function() {
					renderer.deallocateObject( 'images/Philip/Philip_003_50.obj' );					
				},1000);
				
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_80.obj' );
				}, 1050);
				
				setTimeout(function() {
					renderer.deallocateObject( 'images/Philip/Philip_003_80.obj' );					
				},2000);
								
				setTimeout(function() {
					loader.load( 'images/Philip/Philip_003_50.obj' );
				}, 3000);
				

				if ("WebGLRenderingContext" in window)
					renderer = new THREE.WebGLRenderer();
					else
					renderer = new THREE.CanvasRenderer();
					
					renderer.setSize( width, height );
					
					container.appendChild( renderer.domElement );
					
					document.addEventListener( 'mousemove', onDocumentMouseMove, false );
						
				// Add a mouse up handler to toggle the animation
				//addMouseHandler();
				
				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			function onDocumentMouseMove( event ) {

				mouseX = ( event.clientX - windowHalfX ) / 2;
				mouseY = ( event.clientY - windowHalfY ) / 2;

			}

			//
			
			function animate() {
				
				if (animate) {
				requestAnimationFrame( animate );
				render();
				}
			}

			function render() {
			
				camera.position.x += ( mouseX - camera.position.x ) * .05;
				camera.position.y += ( - mouseY - camera.position.y ) * .05;

				camera.lookAt( scene.position );

				renderer.render( scene, camera );
				
				}

			// function addMouseHandler()
			// {
				// var dom = renderer.domElement;
				// dom.addEventListener( 'mouseup', onMouseUp, false);

				// }

			// function onMouseUp	(event)
			// {
				// event.preventDefault();
				// animate = !animate;
		
				// }	
			function pause() {			
				animate = !animate					
			}
			
			function start() {
				if ( animate )
				requestAnimationFrame( animate );
				render();
							
				}
			

	
		</script>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<span class="btn-navheader">4D image data Demo - Facial Gestures</span>
					<a href="objAnim.php" class="btn reset btn-navbar" style="display: block;" onclick="init()">Reset</a>
					<a href="#" class="btn pause btn-navbar" style="display: block;" onclick="pause()">Pause</a>
					<a href="#" class="btn start btn-navbar" style="display: block;" onclick="start()">Start</a>
				</div>
			</div>
		</div>
	</div>

<?php
include ('includes/footer.php');
?>