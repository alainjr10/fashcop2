import React, { Component } from 'react';
import {Row, Col, Image, Button, Card} from 'react-bootstrap';
import funds from './funds.png';
import image3 from './image3.jpg';
import image2 from './image2.jpg';

class column extends React.Component {
    render(){
        return (
            <div className="textArea">
                <div className = "card">
                <Card style={{ width: '25rem', height:'25rem' }}>
                    <Card.Img variant="top"src= {funds}
                    height = "220"
                    width = "150" />
                    <Card.Body>
                        <Card.Title>Explore hundreds of farm project</Card.Title>
                        <Card.Text>
                            Discover a host of amazing farm projects from Cameroonian farmers accross the country. Activities ranging from gardening, to poultry farming, to corn and beans production, etc.
                        </Card.Text>
                    </Card.Body>
                </Card>
                </div>
                <div className="card">
                <Card style={{ width: '25rem', height:'25rem' }}>
                    <Card.Img variant="top" src= {image3} 
                    height = "220"
                    width = "150"/>
                    <Card.Body>
                        <Card.Title>Invest in Agriculture</Card.Title>
                        <Card.Text>
                            Find and invest in real, lucrative farm projects from accross Cameroon. Want to be a part of an exciting agricultural journey? The perfect farm projects for you are just a button click away. 
                        </Card.Text>
                    </Card.Body>
                </Card>
                </div>
                <div className="card">
                <Card style={{ width: '25rem', height:'25rem' }}>
                    <Card.Img variant="top" src= {image2} 
                    height = "220"
                    width = "150"/>
                    <Card.Body>
                        <Card.Title >Find funding for your farm project</Card.Title>
                        <Card.Text>
                            Have a real farm project that you're starting to work on, but looking for investors to invest in your work? Register your project with us, to enjoy the outstanding benefits of out platform. 
                        </Card.Text>
                    </Card.Body>
                </Card>
                </div>
            </div>

        );
    }
    };
    
export default column;