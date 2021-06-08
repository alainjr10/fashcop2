import React, { Component } from 'react';
import image12 from './image12.jpg';
import { Button, Card, Carousel, Navbar, Nav} from 'react-bootstrap';
import logo from './FaShCoP.png';
import image4 from './image4.jpg';
import image5 from './image5.jpg';
import image6 from './image6.jpg';
import funds from './funds.png';
import image3 from './image3.jpg';
import image2 from './image2.jpg';

class Home extends Component {
    render() {
        return (
         <React.Fragment>
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

        <div>
            <h2 style={{color:"forestgreen", fontFamily:"Cambria"}} align="center"> Here's what we offer </h2>
        </div>

        <div className="textArea">
            <div className = "card">
                <Card style={{ width: '25rem', height:'25rem' }}>
                    <Card.Img variant="top"src= {funds}
                    height = "220"
                    width = "150" />
                    <Card.Body>
                        <Card.Title>Explore hundreds of farm projects</Card.Title>
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

            <div className="paragraph">
                <h2 style={{color:"forestgreen", fontFamily:"Cambria"}} align="center"> Our Mission </h2>
                <p  align="center"> FaShCoP is here to try and bridge the gap between farmers and agro 
                stakeholders/investors. <br/> 
                Funding is a serious challenge to Cameroonian farmers. <br /> Our mission is to help farmers all around the country
                find investment/funding for their farm projects,<br /> by connecting them to people and organizations 
                willing to invest in agriculture.<br /> It is also our mission to ensure that investors find the right farm projects
                in which to invest their money <br/> 
                </p> 
                <h4 style={{color:"forestgreen", fontFamily:"Cambria"}} align="center"> Why FaShCoP?</h4>
                <p align="center" > FaShCoP is the perfect platform for every Cameroonian farmer to find funding for 
                their projects; <br /> irrespective of their ethnic, educational or professional backgrounds.
                Even the least educated farmers<br /> 
                can conveniently make use of FaShCoP, to register their projects and attract investors from all over the country,<br /> 
                Beginning from Cameroon. Even Investors will enjoy FaShCoP, as we provide the simplest and most efficient way to <br />
                explore a good variety of farm projects from Cameroon, which could be really fertile grounds for their money.<br />
                <br />
                <br />
                </p>
            </div>
            <div>
            <h2 style={{color:"black", fontFamily:"Cambria", marginLeft: "20px"}} align="center"> 
            Explore hundreds of Farm projects from Camerooon 
            </h2>
            </div>

            <Carousel>
                <Carousel.Item>
                <div className="textArea">
                 <div className = "card">
                    <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top"src= {image4}
                            height = "220"
                            width = "150" />
                            <Card.Body>
                                <h3>Large Scale corn farm</h3>
                                <Card.Text>
                                    <p>Bati, Mbouda, West Region <br />
                                    73 <b>Views</b><br /> 
                                    Budget range FCFA 250,000 - 300,000</p>
                                </Card.Text>
                                <Button variant="primary">Learn more</Button>
                            </Card.Body>
                        </Card>
                        </div>
                        <div className = "card">
                        <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top" src= {image5} 
                            height = "220"
                            width = "150"/>
                            <Card.Body>
                            <h3>Banana plantation</h3>
                                <Card.Text>
                                    <p> South West Region <br />
                                    73 <b>Views</b><br /> 
                                    Budget range FCFA 500,000 - 700,000</p>
                                </Card.Text>
                                <Button variant="primary">Learn More</Button>
                            </Card.Body>
                         </Card>
                         </div>
                         <div className = "card">
                        <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top" src= {image6} 
                            height = "220"
                            width = "150"/>
                            <Card.Body>
                            <h3>Large Scale gardening project</h3>
                            <Card.Text>
                                <p> Santa, North West Region <br />
                                73 <b>Views</b><br /> 
                                Budget range FCFA 200,000 - 300,000</p>
                            </Card.Text>
                            <Button variant="primary">Learn More</Button>
                            </Card.Body>
                        </Card>
                    </div>
            </div>
                </Carousel.Item>
                <Carousel.Item>
                <div className="textArea">
                 <div className = "card">
                    <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top"src= {image4}
                            height = "220"
                            width = "150" />
                            <Card.Body>
                                <h3>Large Scale corn farm</h3>
                                <Card.Text>
                                    <p>Bati, Mbouda, West Region <br />
                                    73 <b>Views</b><br /> 
                                    Budget range FCFA 250,000 - 300,000</p>
                                </Card.Text>
                                <Button variant="primary">Learn more</Button>
                            </Card.Body>
                        </Card>
                        </div>
                        <div className = "card">
                        <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top" src= {image5} 
                            height = "220"
                            width = "150"/>
                            <Card.Body>
                            <h3>Banana plantation</h3>
                                <Card.Text>
                                    <p> South West Region <br />
                                    73 <b>Views</b><br /> 
                                    Budget range FCFA 500,000 - 700,000</p>
                                </Card.Text>
                                <Button variant="primary">Learn More</Button>
                            </Card.Body>
                         </Card>
                         </div>
                         <div className = "card">
                        <Card className = "card" style={{ width: '25rem', height:'28rem' }}>
                            <Card.Img variant="top" src= {image6} 
                            height = "220"
                            width = "150"/>
                            <Card.Body>
                            <h3>Large Scale gardening project</h3>
                            <Card.Text>
                                <p> Santa, North West Region <br />
                                73 <b>Views</b><br /> 
                                Budget range FCFA 200,000 - 300,000</p>
                            </Card.Text>
                            <Button variant="primary">Learn More</Button>
                            </Card.Body>
                        </Card>
                    </div>
            </div>
                </Carousel.Item>
            </Carousel>
           
         </React.Fragment>
        );
    }
}



export default Home;

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}