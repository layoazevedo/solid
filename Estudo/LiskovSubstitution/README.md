Liskov Substitution Principle (LSP)
=====

O conceito desse princípio foi apresentado por Barbara Liskov em uma apresentação de uma conferência em 1987, e depois publicada em um artigo científico, junto de Jannette Wing, em 1994. A definição original é a que segue:

Classes filhas nunca deveriam infringir as definições de tipo da classe pai! 

Uma subclasse deve sobrescrever os métodos da classe pai, de tal maneira que não quebre a funcionalidade do ponto de vista do cliente dado esse conceito. Criei uma classe veiculo com alguns comportamentos iniciais ligarMotor e ignicao onde suas filhas respeitam o comportamento inicial.