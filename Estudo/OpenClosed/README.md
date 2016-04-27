Open/Closed Principle (OCP)
=====

A definição deste princípio OCP, que significa "Aberto e Fechado" afirma que: 
“Uma classe deve estar aberta para extensão, mas fechada para alteração”.

No OCP utilizei uma classe abstract para criar um motor, essa classe possui um metodo executar que esta aberto para extensão mas fechada para alteração.

Coloquei duas classes Carro e caminhão ambas extendem a classe AbstractMotor que por sua vez é passada como dependencia no método fabricar da classe FabricaMotor.