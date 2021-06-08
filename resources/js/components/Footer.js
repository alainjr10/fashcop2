import React, { Component } from 'react';
import {
    Box,
    Container,
    Row,
    Column,
    FooterLink,
    Heading,
  } from "./FooterStyles";


export default class Footer extends Component {
    render() {
        return (
            <Box>
                <h1 style={{ color: "forestgreen", 
                            textAlign: "center", 
                            marginTop: "-20px" }}>
                    Farmer Stakeholder Connect Platform (FaShCoP)
                </h1>
                <Container>
                    <Row>
                    <Column>
                        <Heading>About Us</Heading>
                        <FooterLink href="#">Our Mission</FooterLink>
                        <FooterLink href="#">Vision</FooterLink>
                        <FooterLink href="#">Testimonials</FooterLink>
                    </Column>
                    <Column>
                        <Heading>Services</Heading>
                        <FooterLink href="#">Find farm projects</FooterLink>
                        <FooterLink href="#">Register farm projects</FooterLink>
                        <FooterLink href="#">Connect to other farmers</FooterLink>
                    </Column>
                    <Column>
                        <Heading>Contact Us</Heading>
                        <FooterLink href="#">Bamenda</FooterLink>
                        <FooterLink href="#">Buea</FooterLink>
                        <FooterLink href="#">Yaounde</FooterLink>
                        <FooterLink href="#">Douala</FooterLink>
                    </Column>
                    <Column>
                        <Heading>Social Media</Heading>
                        <FooterLink href="#">
                        <i className="fab fa-facebook-f">
                            <span style={{ marginLeft: "10px" }}>
                            Facebook
                            </span>
                        </i>
                        </FooterLink>
                        <FooterLink href="#">
                        <i className="fab fa-instagram">
                            <span style={{ marginLeft: "10px" }}>
                            Instagram
                            </span>
                        </i>
                        </FooterLink>
                        <FooterLink href="#">
                        <i className="fab fa-twitter">
                            <span style={{ marginLeft: "10px" }}>
                            Twitter
                            </span>
                        </i>
                        </FooterLink>
                    </Column>
                    </Row>
                </Container>
    </Box>
        )
    }
};
