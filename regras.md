# Object Calisthenics
        Object Calisthenics are programming exercises, formalized as a set of 9 rules invented by Jeff Bay in his book The ThoughtWorks Anthology.
# Regras

### 1. Não usar getters e setters.
        Tell, don't ask.
        Não devemos expor a estrutura interna da classe, garantindo o encapsulamento. O retorno de métodos de acesso a nossas propriedades não deve ser usado para tomar decisões que poderiam estar encapsuladas na classe.

### 2. Ter apenas 1 nível de indentação por método.

### 3. NUNCA use ELSE. Usando por exemplo, o early return e fail fast.
        Existe uma métrica muito famosa para saber quão complexo nosso código está. O nome desta métrica é Complexidade Ciclomática.
        O cálculo dessa métrica é relativamente complexo, mas basicamente, quanto mais ifs e elses, mais complexo nosso método. Esse cálculo nos diz quantos possíveis caminhos nosso código pode percorrer.
        Ao evitar o uso de else, nós escrevemos códigos com uma Complexidade Ciclomática menor, deixando menos “bifurcações” em nosso código, o que facilita a leitura.
        Essa é a regra que eu mais sigo à risca.

### 4. Envolva seus tipos primitivos (como strings), caso eles tenham comportamento. 
        Por exemplo, na classe Video o objeto $visibility se manteve como booleado, mas em Student o email foi extraído para uma classe que faz sua validação, deixando de ser usado como string e passando a ser um objeto do tipo Email. 
        Isso enriquece o domínio do sistema tornando o código bem mais expressivo. Agora podemos dizer que nosso aluno precisa de um Email, e não de uma string. 

### 5. Coleções de primeira classe. São classes específicas para uma coleção.

### 6. Apenas 1 operador de acesso (->) ou instrução.
        Lei de Demeter: "Only talk to your immediate friends". 
        Ou seja, nunca vamos chamar um método em um objeto que recebemos de outra chamada nem num objeto global.

### 7. NUNCA abrevie.

### 8. Mantenha suas classes (50 linhas) e pacotes pequenos (10 classes).

### 9. Tenha no máximo 2 propriedades por classe. Mas até 5 tá bom.