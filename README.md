# Client Hints Demo

This is a simple web page written in PHP with the intention of showing how to request and handle Client Hints (including User-Agent Client Hints).

Client Hints are a set of opt-in HTTP request headers that give us insight into aspects of the user’s device and the network they’re connected to. By tapping into this information server side, we can change how we deliver content based on device and/or network conditions. This can help us to create more inclusive user experiences.

_Note: This demo focuses on using the Client Hints via HTTP headers on the "server-side". Alternatively, there is also a JavaScript API available for the "front-end"._ 

Relevant resources:
- [web.dev/user-agent-client-hints](https://web.dev/user-agent-client-hints/)
- [web.dev/migrate-to-ua-ch](https://web.dev/migrate-to-ua-ch/) 
- [Adapting to Users with Client Hints](https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/client-hints/)

## Running the demo

Requires PHP 8.0 or newer, and Google Chrome 89 or newer. 


Simply point the webserver to the `public` directory. For example, if testing locally, from the Terminal you can navigate to the `public` directory and run PHP's built-in development server and run the following command:

```
php -S 127.0.0.1:8000
```

Once the webserver is running, test the demo in the **Google Chrome** browser. 
