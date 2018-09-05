

from mininet.topo import Topo

class MyTopo( Topo ):
    "Test topology example."

    def __init__( self ):
        "Create custom topo."

        # Initialize topology
        Topo.__init__( self )

        # Add hosts and switches
        Host1 = self.addHost( 'h1',ip='10.0.0.1' )
        Host2 = self.addHost( 'h2',ip='10.0.0.2' )
	Host3 = self.addHost( 'h3',ip='10.0.0.3')
        Switch = self.addSwitch( 's1' )
     
        # Add links
        self.addLink( Host1, Switch )
        self.addLink( Host2, Switch )
        self.addLink( Host3, Switch )


topos = { 'mytopo': ( lambda: MyTopo() ) }
