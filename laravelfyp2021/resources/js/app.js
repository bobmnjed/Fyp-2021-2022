require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import * as THREE from 'three';

const scene = new THREE.Scene();
