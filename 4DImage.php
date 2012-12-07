<?php #Script 1.3 - index.php

$ptitle = 'Demo project';
$page_header = 'Another page';

include ('includes/header.php');
?> 
  	
      <div id="content">
        <!-- insert the page content here -->
        <h1>4D Image Page</h1>
				<div id="webgl" oncontextmenu="return false;">
				</div>
        <script>
					
					var stats;
					var scene;
					var camera;
					var renderer;
					var model;
					var animations;
					var kfAnimations = [ ];
					var kfAnimationsLength = 0;
					var lastTimestamp;
					var progress = 0;
					var container;
					
					var mouseX = 0, mouseY = 0;
					
					var windowHalfX = window.innerWidth / 2;
					var windowHalfY = window.innerHeight / 2;
					
					
					init();
					animate();
					
					function init() {
						
						container = document.getElementById( 'webgl' );
						var width = container.clientWidth;
						var height = container.clientHeight;
						
						camera = new THREE.PerspectiveCamera( 45, width/height, 1, 10000 );
						camera.position.z = 500;
						
						// scene
						
						scene = new THREE.Scene();
						
						var ambient = new THREE.AmbientLight( 0x101030 );
						scene.add( ambient );
						
						var directionalLight = new THREE.DirectionalLight( 0xffeedd );
						directionalLight.position.set( 0, 0, 1 ).normalize();
						scene.add( directionalLight );
						
						// model
						
						var loader = new THREE.OBJMTLLoader();
						loader.addEventListener( 'load', function ( event ) {
							
							var object = event.content;
							
							object.position.y = -1;
							scene.add( object );
							
						});
						loader.load( 'obj/Philip/philip_003_00.obj', 'obj/Philip/philip_003_00.mtl' );
						loader.load( 'obj/Philip/philip_003_01.obj', 'obj/Philip/philip_003_01.mtl' );
						loader.load( 'obj/Philip/philip_003_80.obj', 'obj/Philip/philip_003_80.mtl' );
					
					
						//
						var urls = [ 
						"obj/Philip/philip_003_00.jpeg", 
						"obj/Philip/philip_003_01.jpeg",				
						"obj/Philip/philip_003_80.jpeg"
						]; 
						var textures=THREE.ImageUtils.loadTexture(urls);
						
						scene.add( textures );
						
					
						if ("WebGLRenderingContext" in window)
						renderer = new THREE.WebGLRenderer();
						else
						renderer = new THREE.CanvasRenderer();
						
						renderer.setSize( width, height );
						
						container.appendChild( renderer.domElement );
						
						document.addEventListener( 'mousemove', onDocumentMouseMove, false );
						
						//
						
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
						
						requestAnimationFrame( animate );
						render();
						
					}
					
					function render() {
						
						camera.position.x += ( mouseX - camera.position.x ) * .05;
						camera.position.y += ( - mouseY - camera.position.y ) * .05;
						
						camera.lookAt( scene.position );
						
						renderer.render( scene, camera );
						
					}
				
					
				</script>
				
      </div>

<?php
include ('includes/footer.php');
?>