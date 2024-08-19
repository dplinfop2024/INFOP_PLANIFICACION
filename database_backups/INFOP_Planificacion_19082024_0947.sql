PGDMP  ;    /    	            |            railway    16.3 (Debian 16.3-1.pgdg120+1)    16.3 J    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16384    railway    DATABASE     r   CREATE DATABASE railway WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en_US.utf8';
    DROP DATABASE railway;
                postgres    false            F          0    16869    cargos 
   TABLE DATA           D   COPY public.cargos (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    222   �E       S          0    16965    componentes 
   TABLE DATA           Q   COPY public.componentes (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    235   ;F       U          0    16974    lineas_estrategicas 
   TABLE DATA           m   COPY public.lineas_estrategicas (id, id_componente, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    237   �F       B          0    16851    tipos_unidades 
   TABLE DATA           L   COPY public.tipos_unidades (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �G       D          0    16860    tipos_usuarios 
   TABLE DATA           L   COPY public.tipos_usuarios (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    220   H       H          0    16878    users 
   TABLE DATA           �   COPY public.users (id, id_unidad, id_tipo_usuario, id_tipo_unidad, nombre_unidad, nombre_responsable, id_cargo, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    224   �H       W          0    16988    poas 
   TABLE DATA           c   COPY public.poas (id, id_usuario, anio, id_componente, estado, created_at, updated_at) FROM stdin;
    public          postgres    false    239   )K       [          0    17024    metas_administrativas 
   TABLE DATA           �   COPY public.metas_administrativas (id, id_poa, id_linea, descripcion, unidad_medida, programacion_anual, presupuesto_meta, created_at, updated_at, codigo_meta) FROM stdin;
    public          postgres    false    243   L       u          0    17190    avances_metas_administrativas 
   TABLE DATA           o   COPY public.avances_metas_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    269   4O       Y          0    17005    metas_operativas 
   TABLE DATA           �   COPY public.metas_operativas (id, id_poa, id_linea, descripcion, unidad_medida, cursos, participantes, horas, presupuesto_meta, created_at, updated_at, codigo_meta) FROM stdin;
    public          postgres    false    241   QO       s          0    17178    avances_metas_operativas 
   TABLE DATA           z   COPY public.avances_metas_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    267   �P       K          0    16921    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    227   �P       L          0    16928    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    228   �Q       y          0    17216    evidencias_paccs 
   TABLE DATA           Y   COPY public.evidencias_paccs (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    273   �Q       w          0    17202    evidencias_poas 
   TABLE DATA           X   COPY public.evidencias_poas (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    271   �Q       Q          0    16953    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    233   �Q       a          0    17067    presupuestos 
   TABLE DATA           [   COPY public.presupuestos (id, id_usuario, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    249   R       i          0    17115     presupuestos_maquinarias_equipos 
   TABLE DATA           s   COPY public.presupuestos_maquinarias_equipos (id, id_presupuesto, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    257   nR       k          0    17127    renglones_maquinarias_equipos 
   TABLE DATA           h   COPY public.renglones_maquinarias_equipos (id, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    259   �R       m          0    17134    gastos_maquinarias_equipos 
   TABLE DATA           �   COPY public.gastos_maquinarias_equipos (id, id_presupuesto_me, id_renglon, descripcion, valor, cantidad, created_at, updated_at) FROM stdin;
    public          postgres    false    261   �R       o          0    17151    paccs 
   TABLE DATA           M   COPY public.paccs (id, id_usuario, anio, created_at, updated_at) FROM stdin;
    public          postgres    false    263   �R       q          0    17163    gastos_paccs 
   TABLE DATA              COPY public.gastos_paccs (id, id_pacc, renglon, descripcion, monto, unidad, fecha_entrega, created_at, updated_at) FROM stdin;
    public          postgres    false    265   �R       c          0    17079    grupos_presupuestos 
   TABLE DATA           Y   COPY public.grupos_presupuestos (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    251   �S       e          0    17086    subgrupos_presupuestos 
   TABLE DATA           f   COPY public.subgrupos_presupuestos (id, id_grupo, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    253   KT       g          0    17098    gastos_presupuestos 
   TABLE DATA           m   COPY public.gastos_presupuestos (id, id_presupuesto, id_subgrupo, valor, created_at, updated_at) FROM stdin;
    public          postgres    false    255   �`       O          0    16945    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    231   a       N          0    16936    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    230   "a                 0    17256    metas_reportes_administrativos 
   TABLE DATA           �   COPY public.metas_reportes_administrativos (id, id_meta, porcentaje_trimestral, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    279   ?a       }          0    17242    metas_reportes_operativos 
   TABLE DATA           �   COPY public.metas_reportes_operativos (id, id_meta, porcentaje_cursos, porcentaje_participantes, porcentaje_horas, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    277   \a       �          0    17284    notificaciones 
   TABLE DATA           z   COPY public.notificaciones (id, id_usuario, id_remitente, tipo_notificacion, mensaje, created_at, updated_at) FROM stdin;
    public          postgres    false    283   �a       I          0    16905    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    225   �a       _          0    17055    programaciones_administrativas 
   TABLE DATA           p   COPY public.programaciones_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    247   �b       �          0    24586    programaciones_horas 
   TABLE DATA           �   COPY public.programaciones_horas (id, id_meta, ene, feb, mar, abr, may, jun, jul, ago, sep, oct, nov, dic, created_at, updated_at) FROM stdin;
    public          postgres    false    285   �b       ]          0    17043    programaciones_operativas 
   TABLE DATA           {   COPY public.programaciones_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    245   �b       {          0    17230    reportes_poas 
   TABLE DATA           V   COPY public.reportes_poas (id, id_poa, trimestre, created_at, updated_at) FROM stdin;
    public          postgres    false    275   sc       �          0    17270    reportes_presupuestos 
   TABLE DATA           �   COPY public.reportes_presupuestos (id, id_presupuesto, trimestre, total_ejecutado, total_disponible, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    281   �c       J          0    16912    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    226   �c       �           0    0 $   avances_metas_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.avances_metas_administrativas_id_seq', 1, false);
          public          postgres    false    268            �           0    0    avances_metas_operativas_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.avances_metas_operativas_id_seq', 1, false);
          public          postgres    false    266            �           0    0    cargos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cargos_id_seq', 3, true);
          public          postgres    false    221            �           0    0    componentes_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.componentes_id_seq', 6, true);
          public          postgres    false    234            �           0    0    evidencias_paccs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.evidencias_paccs_id_seq', 1, false);
          public          postgres    false    272            �           0    0    evidencias_poas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.evidencias_poas_id_seq', 1, false);
          public          postgres    false    270            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    232            �           0    0 !   gastos_maquinarias_equipos_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gastos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    260            �           0    0    gastos_paccs_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.gastos_paccs_id_seq', 1, false);
          public          postgres    false    264            �           0    0    gastos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.gastos_presupuestos_id_seq', 1, false);
          public          postgres    false    254            �           0    0    grupos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.grupos_presupuestos_id_seq', 1, false);
          public          postgres    false    250            �           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    229            �           0    0    lineas_estrategicas_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.lineas_estrategicas_id_seq', 19, true);
          public          postgres    false    236            �           0    0    metas_administrativas_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.metas_administrativas_id_seq', 30, true);
          public          postgres    false    242            �           0    0    metas_operativas_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.metas_operativas_id_seq', 1, false);
          public          postgres    false    240            �           0    0 %   metas_reportes_administrativos_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.metas_reportes_administrativos_id_seq', 1, false);
          public          postgres    false    278            �           0    0     metas_reportes_operativos_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.metas_reportes_operativos_id_seq', 1, false);
          public          postgres    false    276            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 31, true);
          public          postgres    false    215            �           0    0    notificaciones_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.notificaciones_id_seq', 1, false);
          public          postgres    false    282            �           0    0    paccs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.paccs_id_seq', 1, true);
          public          postgres    false    262            �           0    0    poas_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.poas_id_seq', 31, true);
          public          postgres    false    238            �           0    0    presupuestos_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.presupuestos_id_seq', 1, true);
          public          postgres    false    248            �           0    0 '   presupuestos_maquinarias_equipos_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.presupuestos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    256            �           0    0 %   programaciones_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.programaciones_administrativas_id_seq', 8, true);
          public          postgres    false    246            �           0    0    programaciones_horas_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.programaciones_horas_id_seq', 1, false);
          public          postgres    false    284            �           0    0     programaciones_operativas_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.programaciones_operativas_id_seq', 1, false);
          public          postgres    false    244            �           0    0 $   renglones_maquinarias_equipos_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.renglones_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    258            �           0    0    reportes_poas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.reportes_poas_id_seq', 1, false);
          public          postgres    false    274            �           0    0    reportes_presupuestos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.reportes_presupuestos_id_seq', 1, false);
          public          postgres    false    280            �           0    0    subgrupos_presupuestos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.subgrupos_presupuestos_id_seq', 2, true);
          public          postgres    false    252            �           0    0    tipos_unidades_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_unidades_id_seq', 2, true);
          public          postgres    false    217            �           0    0    tipos_usuarios_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_usuarios_id_seq', 6, true);
          public          postgres    false    219            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 14, true);
          public          postgres    false    223            F   Z   x�3��JMKUpI-H,*I�M�+��4202�50�5�T0��20�2��&�e�霟_������_D�.CL��Ӌs�3o�#ڤ=... �U/�      S   �   x�m��
�0E�3_1?`I4�6�!� ���,
n]V����]H��pw4h������\HC�r��2�Ϥ+��/���8J6Z��>4	�L1t`�����W�/>���*\���0Ea�� =O�qɸ�p�K�5a�E�[긏��㯪2�H)������/WQ{      U   �   x�m�1� Eg|�\ ߆ >C�ХC�.��X'�<�ק��''$N�����pp��e�m籡kn�K�H��$،�QK�������ZsĨ���-��i�a���t�!#�T<T�Pd�|�f��.Υ6��DqqκF�E������(UQL,&��AV�#T�� �dovzj]S��G��Md�TV�����DqqI��1B��b������/Fσ�~c��      B   ;   x�3�tL����,.)J,�,K�4202�50�5�T0��20�2��&�e��_�J��=... Y�      D   m   x�3���LIL�4202�50�5�T0��20�2��&�e�P��^�������G�6cNǔ�̼��"�4���+KMM)-�L$Z�)�kYbN)iV�q�$�e�e&��/F��� ӌJ�      H   ~  x�m�˒�0�5<���6M��j/��]k6Q"����ךG����r4;�?�꫟p� �,@P�	=�5�)f(K$���TO>ދ�m.i"��/��(/nj%9�k
'��ޓjb�_;�eW��vcי�QsT�͏������r�U�E�(����2�D�v*���)b9J0�icƨ�P��!%_��8�>���O���I����=���r����*j��������̢(��#C����t^&����b�#.1�
>7|7{����P��6;�+36'}G������J\^Ŗ���ϷZV���Y�e"h
@��ڣ�_������G�t���Ӭn$M��3�auz�C�A�,���A�Ǯ^:ZR�0���*��� �Ykk������Y��ɞ*E�S�ӲM���|�x��$��B���b�z\Y�s71������Z:ڊת�Q���-A��[�Vg1"�)<�W�7:��>��,����q��@�լ�m��>5����wUe����������Q�цۭ�tso����Jx {��o���Q԰2t�qéWC�X$a��0#�x4�O%�����~���qyxC��a�]��V�ڵ۸��o���(B`�"��2>���x��Q��/����ğ�(���m'      W   �   x���IR!E��S�� ��,n��J�/T�au
.y�Cf��&�lI������X��&�F�,�9b���"�%�Fĉ�[��K��[��"�OUU��{&`�r�{��1P]���նR��8b�e_��t�``:U��\x0�9�R�,b`����Z�E�Е���\�e:� .�1�R��i���i�P5�|-���u��̵L?���Z� y�s��ֈA���c�S�^_ |h��&      [     x���Qo�0ǟͧ��VZ#�!޲4�"�mԮ{��܈�@d R��wg��͜��$�oߏ���P�"��Q0��7�5�s״�,antӭ:ݴ5���ԏ<!���簪`��"�6p_ٛ�κ�6H���EMgx��!/EKd:.�
M�K]=�0�씶�8�Ć�?iC(���yAU�u	fE]a)�6aF��w��Ɂ������B� �4�*rjr �C�%֪���#n/�G=\��'�KO�������p9�c����� J��@|!��4��0qk�JȞ;!�dvc�n���C3J�����Fb~{?�Jw��TFn��Jt�wL�3B%)/ե14d��j���#�R|���q�!��ވ�l�N0�^��lC��}r�Q�'�Lv[|$e�(��6����d�]�a�Iڰ��9rjl&X��f�n���}�L7���}}�L7����gx��*�šY3C&�f�A�53b���T�Bz͚9|���a�L�Zd�h�&��yQJ���U�5&�i�֘����n��"��d��O�Q�0�4�gb$�Uk�s*�T��*��5�����j/uK�3ڪ��O�)m����������h;|&��������[�.��vm��^�w?��r�h]�K���z�>��h�q��Z6�u��ڦ���a^b7+m�QY�0�:,� 6�E��5۔��5��T�w���niÀ�f�n6�6��MVP <MF�Z�4�]�͎Ħ���x�'q��N�=Q����?	�[�      u      x������ � �      Y   @  x����N�0���)� �S[q�+V�[|���8rR��mn@<B^����j�����w;�3�ٗ'��J�3r;�6��8_��-��E��&I�!�U��z�8Ό��Ҳ��D<Y��N�F�ob!�v����(�{�]!��gw��1bi.��Q,���e�ڔkſ�p!��20S�XIPOykngδQ���	b�GI�n0�uk�~�G۶۶5����^�כG��߀m�ۛ����$8h��`�Ũ>�;��_C�Sb�$�F���հzP��.<�5���W��SY��ʯ�������ZןD�m�4��ʻ�      s   6   x�3�4B0��".# ��8�L8�-a��@acN#SNSN3c�p� u8      K   �   x�����0Eg�1(�	��!]\�P$�T�~|y���y9�Ͻ�Q���zt}�E�b\�t֌�딹�I�	�}�$旸(�MI�i�lQy�0&�\�p��X�Jıvv��=��c�C]�飼�uE�������U�pJ�=�8�8-��6�S/\���sB��{�F      L      x������ � �      y      x������ � �      w      x������ � �      Q      x������ � �      a   I   x�m��� ��,@�����s���˲t'�x�]��b�«bT>�HF��Sʽ|�	��0
��'��T�?�      i      x������ � �      k      x������ � �      m      x������ � �      o   #   x�3��4202��".#NC#�ʏ���� tM<      q   �   x�}�Q
�0���Sx]S�����PM������V���,�%?|�G@��ZH	5Eʆ'�@�4sd.c:��e�#�ԧjCw~�Ts��s����h���9]7Y3�`#ˀ��9�U�7ŧ�fA7�h۱7�{rp�'�)h9�ao�/ �V�X��T�n3�����CgeG���pla��
!�U�P%      c   x   x�e�[
�@�og��Ҽ`���	:Z��u�!�T���k���t����BjYp&�M|C�H�WtU����~��xF�C_��$.\p�/�W� C5EQl"%I�{���y��r{�~�-�      e   c  x��ZKo�H>+���,������b'�����1��\ZT[�Y��i�����9�6W����ݔ千��������z�b"&"��䭱��N�[+�]�ZZ-�ɯ���1Res��h�j��Uu�ete��*���6�����JvMW�(��%$�x!���n�k`�&Z�H��n@��T�Z]ʞ>%�N\l:�a6I&		��fݕ�i�`�Uu�K�|�Vj�׃�91�&���2Z�z++��I:IY0~�45�ו���Y���4�ـ��k�ڛ���;�6=������V�.�|�M2���T	��L��̦Έ�=��9��������G2_�?��Cp�di�U��iZY���E)�oܚz�MFg����`��Ɉ`�*��:��iR��?T�\B���Q�H���E���-��$��w`.p"�7e�&Q/�i��;����GF.~�(!/8	3�� ��V����V��s����i���HԜE%�E]�Z��	����+���'.��, =& ҕp��L���1𶻮��̕傧�{-�z�Zyc�	3O�
N�j]��#��Ɂ{����<z�6�)��t�ZYU����C̼�[Yot�#��F@����1v.kHTz�1���
5� �GX�	)I�~j�=�DN�%�~@����LYh�l���ӘNKL�-��0Ob��>S��'	�Ȟ+�`HR�?W����$cYŏX�X�$9�Wý����qz��\Bv��Ada�'K�K1�3��^owZ}�'P��;�½kΨ���]a������n�_�DJ���
��J�;�����i����i��_J�L1&O��[S�xWߩ�%��"����_+-
�q&�V�t]�ډ!D�����?wv�m�H�K��2R/5 �P
a,������1�^.�^�ˮn;�<�5	Yi~(!�$�q�pt��@G2�O��D d\��'���V����PGK�Ȓ�w�����]�� ��Z�RBM���.jKU���/y�6�uf��m	���r{�W�.)�8r�G��cMzA��ɍ������"�a[��Q2_h�7@e��"u� ?@3��ׄ@�sG��O@�K�������j���sx�1u쩡��V\���crrm�mЍ�k$�������b�/�>�G2�����Sdl��x�o�Çkϙʝg<ǌ�w��M讜�[�=�������Qv�U�d ��7���W ���������P-GE�+2�[
r�pT���4�(YB�55�ӄ�֔�r@��C��0$o�FW�{���|3������C���!�nE�������X����+��f�dE���F��Q:���Zp��^PɈ*���Um8+	��(鯕���q7P���ݲ�n!�v����z��`���F089!��⼾U.5^��VG�D��5xD@`�wH�1	�D�>D!۪�P��7j�hP�.t)�0�~C���	��;�@X���Â|�$���GP����� ���ve��}Pw�pB<LtP(4#�P�E���ӺQ�?d��]eF�I
��;Y	̨�P�y������<C������'k�M>#�P��[ ^�ʕ�|��1T+�C8� 2�Ҳ�ں�3#ec����ۆw%�d��g�BQ�?t�������Qf�̎O���g3�*�������W��.��fב��)@�� �>)�ҙ��Q�p��	�����I�3!]A��J3Б�BK�ʖ���.�<�LN��x���Py�g��Җ@��rAy�T`1��";��(�p���9�g�BT���l�<%Y���7��l��i�4+��b^��w+\�*��s0������S6� ���[r���`�ݤ�A�~?��S���0]f�.��WL�f�`_�G�;���*<�\j�����/���A�l���S��c�G�3��.�S>���&MN�Goqڦ��P��Qȃ9j �_��Fs���dŔ|Z<J~Kf��`�5��Ȯ�� J���E|���~>�	��Y�4u�#L ��a?��*���"qIq����I-����Xa��*�g�6hׄ �8������F{�f�� �)���0w�������8��P��ku��Oj��&���������p���tvAN�~�#UP�Mi5��'n�=�-�a	��NML��9
T>�����F���#́�87-��3v�k3�yLN�C�����٧\	m��>�F����אs��E��cfM��q^�L)�;
=	ۊ@�q�q�"�'�z���r�ge6!S�L�A#���3�j��&�E̘Ɋ��@�P
�������DČ#�9`�����23��r_SZ%[�B?������-�q�̛B�h��i�,��A"$������HS����t��XIb�LB�K��Ƨ&L����	 �cOR$�1���"W��*i�͘Tt+��is�M�\.y����X��4S�L)eY�6��C�bDB//h�~��J+G4�_���f\s�>��)Gl��G����LᄥS����@���l��O�����g)1���cfϞdw���#a��8�+8��O����$�N�\b�{-av���D�؉��^g�]�ėd'�g}9��j�p�f��rxs�2��ٓ��z�f�����G|����[j��ġ��k&^���(���8�-�"���m�_��b� y��2Tq=}�]I;l��%h��.i e|���k���8�E�c���e>z�Ew	2x���K����~��'�[��4���_��0b�qxpP��I�(�q���."che#'[F���������/EƎ�����S{w���� -~�����gƾ.��8�"��,��٣X~���<?ԛ�J���8_����q��WI�b���lENh�EO��q~�!G�;�׺��_��5��hl�V��ټS���\�{��0�R�	 ��~�/$��g��\���ַ�TZ�E��R,vn����E�J~�
�\���tB m�Y�'���<O�E�e�X-��y<��ﶣ����r�fA�,�+w�_3��O�����.@1ˉ��v������\B�NP����D��������'�4&�c�@B����7)�.���	WE��� ��c%�]�����
��R?*�ן^�x�?q}��      g   7   x�3�4A �30���".#�����1PИ����I�(h�i��0F��� ��	      O      x������ � �      N      x������ � �            x������ � �      }   &   x�3�4�43�47�0����K/�K��"�=... j��      �      x������ � �      I   �   x�]ͻ�0 ��~��U�8!
����q��������ј��(��(x�r&س֐0)�D����14�qD��.ծ���@�,/Tt$Sq�4;�}��*-�Cv
6v2�N[xسH�k�ɐ��=�D*9����O�x9V�~у�X��&�o��b�Ȱ�2Y="k]�xC��_+7���b���;���D}��D;      _   J   x�m��� ѳ��4@d��ĵ����>�&%�d������̶��1Òuk��f��=�G0Ö"�Ve���F�"e      �      x������ � �      ]   l   x�]��� ��cCX�	���5�r_
W���u΃�(�Bf>��l0G��ޒ�윏ٴ9��Դ��W��t��/MR���g��\>��_mg�u��VJ� I�'�      {      x�32�4�4��".CdN� Uh>      �      x������ � �      J   =  x��Tɒ�H=K_�ю��
�D8|�hf_�6��XZ��Oɒ�}�;|�n/�|��^�z��&N�z������(�*J�H.!O�?;�3 �O$��Li���~"�On^'M&T� 8��� ��B��3�n[��i��_�ij�D1ħ�R��(/SBL��Ll�SS��?H��)��|�!��2i���KF���|����T�MnNȲ�5� ��a����F�Q�
�mb�U`:��§��|Z��C,�(�P�xJ�A�Q���p�U�k�¨�쪌L�5�W�R�We����h�u�lXU��]��+�=���U�l��lxr��F����zE�{08����K�;&�<����;���s+��F	�Ż��.�[��Sm��É)'��8�'��Fl0����,�\�4�|����Z��o�ڳ�j�3����i��`f]��Uw�,,�ѩ��h���oFy�p�U��f������=�Ly�ߩ�R�Tu�?��k��n~�5�g�)Ȟ�͛��k��w�m��q��'C��O�'�ѽo�q獏|��+��Wד=vi�f��ux}�\��ݫr)�"��E$������J���-�[�C��e;�ș��ᴭ��^Щ�u1�U29����%-�v��.	M�O��4�#�wI��W�]��a�<��<�W&ު�ƙI�@Q�O.��1���c_����,�ɘ��(�Zf�"y"%�#�P�&8&-��n�-:��������[(#]/3���>.�TC�㝻����D���~8�r�_q�1(V�cG�p����]�{��r\�D��"��3,Iο?���N-w�     