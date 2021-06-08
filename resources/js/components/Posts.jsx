import React from 'react';
import axios from 'axios';

const Books = () => {
    const [books, setBooks] = React.useState([]);
    React.useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/posts')
        .then(response => {
            setBooks(response.data)
        })
        .catch(error => console.error(error));
    }, []);
    const bookList = books.map((book) => 
        <li key={book.caption}>{book.location}</li>
    );
    return (
        <ul>{bookList}</ul>
    );
}

export default Books;