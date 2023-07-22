// import React from 'react';
import { Link } from '@inertiajs/react';

export default function Layout({ children }) {
    return (
        <div className="main">
            <nav className="navbar navbar-expand-lg navbar-light bg-light mb-3">
                <a className="navbar-brand" href="/">Cypher<br/>
                    <div className="slogan">Inertia App</div></a>
                <Link className="nav-link" href="/">Home</Link>
                <div className="collapse navbar-collapse">
                    <ul className="navbar-nav mr-auto">
                        <li className="nav-item">
                            <Link className="nav-link" href="/">Home</Link>
                        </li>
                    </ul>
                </div>
            </nav>
            {children}
        </div>
    );
}
