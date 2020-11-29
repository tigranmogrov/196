import './core/polyfill';
import {boot} from './core/boot';
import { Anchor } from './anchor';
import { Lazy } from './lazy';
import './main';
boot.init([
	// module
	{ module: Anchor },
	{ module: Lazy }
]);
