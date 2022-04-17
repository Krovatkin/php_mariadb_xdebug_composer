
### Using XDebug

* Note, we are using `xdebug.client_host=localhost` since VSCode runs **inside** the container 
* Create a launch configuration with the debug port 9003. 
    * One can double check the port w/ phpinfo in the XDebug section
`xdebug.start_with_request=yes` may need one to start a debug session in VSCode (clicking "Run") or PHP may error out
    * Alternatively remove `xdebug.start_with_request=yes` from `Dockerfile` and use `xdebug_break();` to start a debug session.
    * `xdebug_break();` still needs one to click "Run"