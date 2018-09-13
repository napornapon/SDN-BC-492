# Set-up environment
1.Install mininet http://mininet.org/download/
2.Install floodlight or clone this following repo. as example https://github.com/wallnerryan/floodlight-qos-beta
3.Extract floodlight-qos-beta files
4.Clone and copy project492.py of mininet topo to your /mininet/custom folder

# Run Floodlight
(Used example one)
  $cd floodlight-qos-beta
  $ant
  $ java -jar target/floodlight.jar
  
 To visit Floodlight ui -> 127.0.0.1:8080/ui/index.html
 
# Run Mininet use my topo
   $sudo mn --custom ~/mininet/custom/project492.py --topo mytopo --controller remote
   
# Bandwidth test
  mininet> iperf h1 h3 (Test connection between h1 and h3)
  or
  mininet>xterm h1 h3
  h3>iperf -s (open TCP socket reciever)
  h1>iperf -c 10.0.0.3 (h3 IP)
  
  **If dont have xterm -> sudo apt-get xterm
  
# Control client side BW
  Follow this repo. PHP side
  
# Control income from server
  # Add queue
    $cd floodlight-qos-beta; $cd apps
    $sudo ./mininet-add-queues.py
   Now queues are ready for each interface
  # Enable QoS
    $sudo ./qosmanager2 -e
  # List Policies
    $sudo ./qosmanager2 -L -t policies
  # Set Queue for each IP (Now control src 10.0.0.3 and des 10.0.0.1)
    $sudo ./qospath2.py -a -S 10.0.0.3 -D 10.0.0.1 -N 2Bits3-1 -J '{"eth-type":"0x0800","queue";"2"}'
      [-a = add ,-S source IP , -D destination IP , -N name of policy , -J json object
  **Then test bandwidth again by let 10.0.0.1 as receiver from 10.0.0.3
  
  # To delete Queue
    $sudo ./qospath2.py -d -N 2Bits3-1
    

