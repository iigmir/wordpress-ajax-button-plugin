let dom = document.getElementById("iSecondlyAJAX");

const request_action = ({ data, dom }) =>
{
    console.log({ data, dom });
    dom.innerText = data.title;
};

const request_iSecondlyAJAX_api = () =>
{
    fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then(response => response.json())
    .then(data => request_action({ data, dom }));
}