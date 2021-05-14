ARG FLAG supersecret
FROM centos:7
#ENV FLAG th1515sup3rs3cr3t
ARG FLAG
COPY exercise.c Makefile /root/
WORKDIR /root/
RUN yum install gcc make a -y
RUN yum install socat -y
RUN echo {$FLAG} > /flag
RUN make bin
ENTRYPOINT while true; do socat TCP-LISTEN:5555,fork,reuseaddr, exec:"/root/exercise",stderr; sleep 1; done
