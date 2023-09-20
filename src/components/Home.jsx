import React from "react";
import './Home.css'
const Home = () => {
  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div className="container-fluid">
          <a className="navbar-brand" href="#"></a>
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-expanded="false"
          >
            <span className="navbar-toggler-icon"></span>hi
          </button>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav mx-auto">
              <li className="nav-item">
                <a className="nav-link" href="login.html">
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="home">
        <h1>Peaceful Sercice</h1>
        <h1>Believe Us..</h1>
      </section>

      <footer>
        copyrights reserved @PeacefulService2023{" "}
        <i className="fas fa-servicestack"></i>
      </footer>
    </div>
  );
};

export default Home;
