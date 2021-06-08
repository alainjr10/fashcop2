import React, { Component } from 'react';
import { Jumbotron, Row, Col, Image, Button, Card, Carousel} from 'react-bootstrap'
import image12 from './image12.jpg';

class Carousel extends Component {
    render() {
        return (
            <div>
        <Carousel>
            <Carousel.Item>
                <img
                    height = "600"
                    width = "100"
                    className="d-block w-100"
                    src= {image12}
                    alt="First slide"
                />
                <Carousel.Caption>
                <h1><b>WELCOME </b> </h1>
                <h2><b>At FaShCoP, We connect farmers to investors in the best possible way</b></h2>
                <h4>Helping farmers find investment for their amazing projects, while finding the right places to put the money of our investors</h4>
                <Button variant="outline-light">All Projects</Button>{' '} <Button variant="dark">Learn More</Button>{' '}
                </Carousel.Caption>  
            </Carousel.Item>
            <Carousel.Item>
                <img
                    height = "600"
                    width = "100"
                    className="d-block w-100"
                    src= {image12}
                    alt="Second slide"
                />
                <Carousel.Caption>
                <h1>Helping people invest in Agriculture</h1>
                <h4>Explore and discover the best farm projects from the most hard working and diligent farmers in the country. Invest your money into the right places</h4>
                <Button variant="outline-light">All Projects</Button>{' '} <Button variant="dark">Learn More</Button>{' '}
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    height = "600"
                    width = "100"
                    className="d-block w-100"
                    src= {image12}
                    alt="Third slide"
                />
                <Carousel.Caption top ="80%">
                <h1>Assisting farmers in finding investment/funding for your projects</h1>
                <h4>Finding investors for your farm projects has never been this easy. Expose your brilliant ideas to thousands of potential investors from Cameroon and beyond.</h4>
                <Button variant="outline-light">All Projects</Button>{' '} <Button variant="outline-dark">Learn More</Button>{' '}
                </Carousel.Caption>
            </Carousel.Item>
            </Carousel>
            </div>
        );
    }
}

export default Carousel;