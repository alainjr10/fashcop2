import React, { Component } from 'react';
import { Navbar, Nav, NavDropdown, Form, FormControl, Button, ButtonGroup ,NavItem} from 'react-bootstrap';
import { Link, withRouter } from 'react-router-dom';
import logo from './FaShCoP.png';

function CustomNavbar(props) {
        return (
            <Navbar fixed = "top" bg="light" variant="transparent" background-color="light">
                <Navbar.Brand href="#home"><img
                    height = "90"
                    width = "150"
                    src= {logo}
                /></Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="mr-auto">
                    </Nav>
                    <Nav>
                    <ul class="navbar-nav ml-auto">
                     
                        <li
                            class={`nav-item  ${
                             props.location.pathname === "/" ? "active" : ""
                            }`}
                        >
                            <Link 
                             className="btn btn-outline-dark btn-lg"
                             role="button"
                             to="/Login"
                            > 
                             Log In
                            </Link>
                        </li>
                        
                        <li
                            class={`nav-item  ${
                             props.location.pathname === "/" ? "active" : ""
                            }`}
                        >
                            <Link 
                             className="btn btn-outline-dark btn-lg"
                             role="button"
                             to="/SignUp"
                            > 
                             Sign Up
                            </Link>
                        </li>
                        </ul>
                    </Nav>
                    
            </Navbar.Collapse>
        </Navbar>
        );
    }

export default withRouter(CustomNavbar);